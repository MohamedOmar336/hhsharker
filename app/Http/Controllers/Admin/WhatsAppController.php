<?php
namespace App\Http\Controllers\Admin;

use App\Services\WhatsAppService;
use Illuminate\Http\Request;
use App\Models\WhatsAppContact;
use App\Models\WhatsAppMessage;
use App\Http\Controllers\Controller;


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

        return  view('admin.chat.whatsapp' , compact('whatsapps'));
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
        // Extract the phone number and message from the request
        // Note: Adjust these request keys based on the actual JSON structure sent by WhatsApp
        $phoneNumber = $request->input('sender.phone');
        $text = $request->input('message.text');

        // Find or create the contact
        $contact = WhatsAppContact::firstOrCreate(['phone_number' => $phoneNumber]);

        // Store the message linked to the contact
        $message = new WhatsAppMessage([
            'whatsapp_contact_id' => $contact->id,
            'message' => $text,
            'direction' => 'incoming'  // Assuming it's an incoming message
        ]);
        $message->save();

        return response()->json(['success' => true, 'message' => 'Message received and stored']);
    }

    public function storeMessage($phoneNumber, $text, $direction)
    {
        $contact = WhatsAppContact::firstOrCreate(
            ['phone_number' => $phoneNumber],
            ['name' => 'Optional Name'] // Assume name could be dynamically determined as well
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

        $messages = WhatsAppContact::where('id' , request()->roomId)->with('messages')->first();

        return response()->json(['success' => true, 'message' => $messages]);
    }
}
