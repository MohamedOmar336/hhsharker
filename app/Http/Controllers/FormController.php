<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AutoReplyMail;  // The Mailable
use Illuminate\Support\Facades\Mail; 

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'message' => 'required|string',
        // ]);

        // Save form data if necessary (e.g., to the database)

        // Send automated reply email
        Mail::to($request->email)->send(new AutoReplyMail($request->name));

        // Redirect or show success message
        return redirect()->back()->with('success', 'Your message has been submitted. We will reply shortly.');
    }
}
