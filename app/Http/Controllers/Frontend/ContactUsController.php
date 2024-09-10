<?php
namespace App\Http\Controllers\Frontend;

use App\Models\test;
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
                'company' => 'required|string|max:255',
                'mobile_number' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);    
            test::create($request->all());    
            return redirect()->route('frontend.contact-us')->with('success', 'Contact created successfully.');
        }catch(Exception $e){
            return redirect()->route('frontend.contact-us')->with('error', $e->getMessage());
        }
       
    }

}
