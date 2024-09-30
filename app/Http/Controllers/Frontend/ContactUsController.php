<?php
namespace App\Http\Controllers\Frontend;

use App\Models\test;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
   
    public function index()
    {
        return view('frontend.pages.contact-us');
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'mobile_number' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'company' => 'required|string|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);    
            Contact::insert([
                'name' => $request->name,
                'phone' => $request->mobile_number,
                'email' => $request->email,
                'extra_data' => json_encode([
                    'company' => $request->company,
                    'subject' => $request->subject,
                    'message' => $request->message
                ]),
            ]);    
            return redirect()->route('frontend.contact-us',['locale' => app()->getLocale()])->with('success', 'Contact created successfully.');
        }catch(Exception $e){
            return redirect()->route('frontend.contact-us',['locale' => app()->getLocale()])->with('error', $e->getMessage());
        }
       
    }

}
