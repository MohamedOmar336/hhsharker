<?php
namespace App\Http\Controllers\Admin;

use App\Services\WhatsAppService;
use Illuminate\Http\Request;
use App\Models\WhatsAppContact;
use App\Models\WhatsAppMessage;
use App\Http\Controllers\Controller;
use App\Models\Contact;


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

        $whatsapps = WhatsAppContact::with('messages' , 'lastMessage')->get();

        $contacts = Contact::all();

        return  view('admin.chat.whatsapp' , compact('whatsapps' , 'contacts'));
    }

    public function sendMessage(Request $request)
    {
        $phone = $request->phone;
        $message = $request->message;
        $response = $this->whatsAppService->sendMessage($phone, $message);
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
        \Log::info('Raw request data:', $request->all());

        $input = $request->all();
        \Log::info('Webhook received:', $input); // Log the entire request to inspect structure

        try {
            // Loop through each entry
            foreach ($input['entry'] as $entry) {
                $messages = $entry['changes'] ?? [];

                foreach ($messages as $message) {
                    if (isset($message['value']['messages'][0])) {
                        $msgDetails = $message['value']['messages'][0];

                        $chatMessage = $msgDetails['text']['body'] ?? null;
                        $timestamp = $msgDetails['timestamp'] ?? null;
                        $senderId = $msgDetails['from'] ?? null;

                        if ($chatMessage) {
                            // Assuming you might have a method to find or create a contact based on senderId
                            $contact = WhatsAppContact::firstOrCreate(['phone_number' => $senderId], ['name' => 'Unknown']); // Ensure 'name' or other required fields are handled

                            // Create and save the WhatsApp message
                            $whatsAppMessage = new WhatsAppMessage([
                                'whatsapp_contact_id' => $contact->id,
                                'message' => $chatMessage,
                                'direction' => 'incoming'  // Assuming 'incoming' for received messages
                            ]);
                            $whatsAppMessage->save();

                            \Log::info("Message saved: {$whatsAppMessage->message} from {$contact->phone_number}");
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
    public function sendTemplate (){

        $phone = isset(request()->phone) ?  request()->phone : null;

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
}
