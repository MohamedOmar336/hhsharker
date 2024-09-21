<?php
namespace App\Http\Controllers\Admin;

use App\Services\WhatsAppService;
use Illuminate\Http\Request;
use App\Models\WhatsAppContact;
use App\Models\WhatsAppMessage;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;
use App\Models\Notification;
use Illuminate\Support\Facades\Bus;
use App\Jobs\SendWhatsAppMessage;

class WhatsAppController extends Controller
{
    protected $whatsAppService;

    public function __construct(WhatsAppService $whatsAppService)
    {
        $this->whatsAppService = $whatsAppService;
    }


    public function index(){

        return view('admin.chat.chat');
    }

    public function chat(){

        $contacts = Contact::all();

        return  view('admin.chat.whatsapp' , compact( 'contacts'));
    }

    public function sendMessage(Request $request)
    {
        $phone = $request->phone;
        $message = $request->message;
        $response = $this->whatsAppService->sendMessage($phone, $message , 'text');
        // Check if the success key exists and is true
        if (isset($response['success']) && $response['success']) {
            $messageRecord = $this->storeMessage($phone, $message, 'outgoing');
            return response()->json(['success' => true, 'response' => $response, 'message' => $messageRecord]);
        } else {
            // If success is false or the key doesn't exist, return an error response
            return response()->json(['success' => false, 'response' => $response, 'error' => $response['error'] ?? 'Unknown error']);
        }
    }

    public function receiveMessage(Request $request)
    {
        $input = $request->all();

        try {
            foreach ($input['entry'] as $entry) {
                $messages = $entry['changes'] ?? [];
                foreach ($messages as $message) {
                    if (isset($message['value']['messages'][0])) {
                        $msgDetails = $message['value']['messages'][0];
                        $chatMessage = $msgDetails['text']['body'] ?? null;
                        $senderPhone = $msgDetails['from'] ?? null;
                        $contactMessage = WhatsAppContact::where(['phone_number' => $senderPhone])->first();
                        $contact = Contact::where(['phone' => $senderPhone])->first();

                        if ($chatMessage && $contactMessage && $contact) {
                            $whatsAppMessage = new WhatsAppMessage([
                                'whatsapp_contact_id' => $contactMessage->id,
                                'message' => $chatMessage,
                                'direction' => 'incoming'
                            ]);
                            $whatsAppMessage->save();

                            Notification::create([
                                'type' => 'App\Models\WhatsAppMessage',
                                'data' => ['message' => 'New messages From ' . $contact->name, 'link' => route('whatsapp.chat')],
                                'notifiable_id' => 1,
                                'notifiable_type' => 'App\Models\User',
                            ]);

                            // Post data to Firebase using HTTP client
                            $response = Http::post(env('FIREBASE_DATABASE_URL') . '/path/to/messages/' . $contact->id . '.json', [
                                'message' => $chatMessage,
                                'from' => $senderPhone,
                                'timestamp' => now()->toDateTimeString(),
                                'updated_at'=> now()->toDateTimeString(),
                                'contact_id' => $contact->id
                            ]);

                        }else{

                            $contact = Contact::create([
                                'name'=>'Guest',
                                'email'=>'Guest@example.com',
                                'phone'=>$senderPhone,
                                'address'=>'test address',
                                'last_interaction'=> now()->toDateTimeString(),
                            ]);
                            $contactMessage = WhatsAppContact::create(['phone_number' => $senderPhone , 'name'=>'Guest'])->first();

                            $whatsAppMessage = new WhatsAppMessage([
                                'whatsapp_contact_id' => $contactMessage->id,
                                'message' => $chatMessage,
                                'direction' => 'incoming'
                            ]);
                            $whatsAppMessage->save();

                            Notification::create([
                                'type' => 'App\Models\WhatsAppMessage',
                                'data' => ['message' => 'New messages From ' . $contact->name, 'link' => route('whatsapp.chat')],
                                'notifiable_id' => 1,
                                'notifiable_type' => 'App\Models\User',
                            ]);
                            // Post data to Firebase using HTTP client
                            $response = Http::post(env('FIREBASE_DATABASE_URL') . '/path/to/messages/' . $contact->id . '.json', [
                                'message' => $chatMessage,
                                'from' => $senderPhone,
                                'timestamp' => now()->toDateTimeString(),
                                'updated_at'=> now()->toDateTimeString(),
                                'contact_id' => $contact->id
                            ]);
                            if($response){
                                $this->sendTemplate($senderPhone);
                            }
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            \Log::error("Error processing WhatsApp webhook: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Internal Server Error'], 500);
        }

        return response()->json(['success' => true, 'message' => 'Messages received and stored']);
    }


    public function storeMessage($phoneNumber, $text, $direction)
    {
        $contact = WhatsAppContact::firstOrCreate(
            ['phone_number' => $phoneNumber],
            ['name' => auth()->user()->first_name . ' ' . auth()->user()->last_name] // Assume name could be dynamically determined as well
        );

        $message = new WhatsAppMessage([
            'whatsapp_contact_id' => $contact->id,
            'message' => $text,
            'direction' => $direction // 'incoming' or 'outgoing'
        ]);

        $message->save();

        return $message;
    }

    public function roomMessages (){

        $messages = WhatsAppContact::where('phone_number' , request()->phoneNumber)->with('messages')->first();

        return response()->json(['success' => true, 'message' => $messages]);
    }

    public function sendTemplate ($senderPhone = null){

        $phone = isset(request()->phone) ?  request()->phone : $senderPhone;

        $whatsAppService = new WhatsAppService();

        $response = $whatsAppService->sendTemplateMessage($phone , 'visit_website', [
            ['type' => 'text', 'text' => 'Mohammed omarr'] // Assuming your template expects one text parameter
        ]);

        // Check if the success key exists and is true
        if (isset($response['success']) && $response['success']) {
            $messageRecord = $this->storeMessage($phone, 'Template Message ' , 'outgoing');

            return response()->json(['success' => true, 'response' => $response , 'message' => $messageRecord]);
        } else {
            // If success is false or the key doesn't exist, return an error response
            return response()->json(['success' => false, 'response' => $response, 'error' => $response['error'] ?? 'Unknown error']);
        }
    }

    /**
     * Verify the webhook endpoint.
     */
    public function verify(Request $request)
    {
        $verify_token = "mhmedomr336new"; // This should match the token you set in Facebook's webhook configuration

        if ($request->hub_mode === 'subscribe' &&
            $request->hub_verify_token === $verify_token) {
            return response($request->hub_challenge, 200);
        }

        return response('Invalid token', 403);
    }

    /**
     * send broadcast whatsapp message to the selected numbers
     *
     */
    public function broadcastMessage (Request $request){

        $contacts = Contact::all();

        return  view('admin.chat.broadcast' , compact( 'contacts'));
    }


    /**
     * Send a broadcast WhatsApp message to the selected numbers.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function sendBroadcastMessage(Request $request)
    {
        if($request->scheduled_time){
            $this->sendSchedualBroadcast( $request );

            return redirect()->route('whatsapp.broadcast.index')->with('success', 'Message sent successfully!');
        }

        $response = $this->whatsAppService->sendBroadcastMessage($request->phones, $request->message);

        // Check if the response is successful for all numbers
        if ($response && !array_search(false, array_column($response, 'success'))) {
            // Redirect to a specific route or view with a success message
            return redirect()->route('whatsapp.broadcast.index')->with('success', 'Message sent successfully!');
        } else {
            // Collect errors or use a generic error message
            $errorMessages = array_map(function ($res) {
                return $res['error'] ?? 'Failed to send';
            }, $response);

            // Redirect back or to a specific view with error details
            return redirect()->back()->withErrors($errorMessages)->withInput();
        }
    }

    public function sendSchedualBroadcast (Request $request)
    {
        $scheduledTime = \Carbon\Carbon::parse($request->scheduled_time);  // Notice the leading backslash
        \Log::info("Scheduled time: " . $scheduledTime);  // Log the time for debugging

        // Dispatch the job to be executed at the specified time
        SendWhatsAppMessage::dispatch($request->phones, $request->message)
                           ->delay($scheduledTime);

        return redirect()->route('whatsapp.broadcast.index')->with('success', 'Message scheduled successfully 2!');
    }

    /**
     * Handles the file upload request from the user and sends the file to WhatsApp.
     *
     * This function accepts a file from an HTTP request, processes the file,
     * and uses the WhatsAppService to send it to WhatsApp's server. It then
     * returns a response to the user based on the success or failure of the file upload.
     *
     * @param Request $request The Laravel request object containing the file to be uploaded.
     * @return \Illuminate\Http\RedirectResponse Redirects back with a success or error message.
     */
    public function uploadFile(Request $request)
    {
        // Retrieve the file from the request object assuming 'attachment' is the input's name
        $file = $request->file('attachment');

        // Instantiate the WhatsAppService to use its method for sending attachments
        $whatsAppService = new WhatsAppService();

        // Attempt to send the attachment and store the result
        $uploadResult = $whatsAppService->uploadMedia($file);

        if ($uploadResult['success']) {
            // Check if the upload was successful
            if ($uploadResult['success']) {
                // Get the media ID from the upload result
                $mediaId = $uploadResult['media_id'];
                // Define the phone number, message type, and other relevant details
                $phone = $request->phone;
                $type = 'document'; // Change this to 'image', 'video', or 'audio' as needed
                $caption = 'Here is the document'; // Optional caption for media messages
                $filename = $file->getClientOriginalName(); // Get the original file name

                // Send the message with the uploaded file
                $sendResult = $whatsAppService->sendMessage($phone, $mediaId, $type, $caption, $filename);

                        // Check if the message was sent successfully
                if ($sendResult['success']) {
                    // Return a JSON response with success status and media ID
                    return response()->json([
                        'success' => true,
                        'message' => 'File uploaded and message sent successfully!',
                        'media_id' => $mediaId,
                    ], 200);
                } else {
                    // Return an error if sending the message failed
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to send message: ' . $sendResult['error'],
                    ], 500);
                }
            } else {
                // Return an error if the upload failed
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to upload file: ' . $uploadResult['error'],
                ], 500);
            }
        } else {
            return back()->with('error', 'Failed to upload file: ' . $uploadResult['error']);
        }
    }

}
