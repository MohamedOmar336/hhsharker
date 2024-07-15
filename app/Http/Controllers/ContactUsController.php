<?php
namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use App\Models\SmtpSettings;

class ContactUsController extends Controller
{
    /**
     * Show the form for creating a new contact.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.test');
    }

    /**
     * Store a newly created contact in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:contacts,email',
            'city' => 'nullable|string|max:255',
            'product_category' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        test::create($request->all());

        return redirect()->route('test.create')->with('success', 'Contact created successfully.');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'mobile_number' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255',
            'city' => 'nullable|string|max:255',
            'product_category' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'company', 'mobile_number', 'email', 'city', 'product_category', 'subject', 'message');

        // Get SMTP settings from the database
        $smtpSettings = SmtpSettings::first();

        // Dynamically set the mail configuration
        Config::set('mail.mailers.smtp.transport', 'smtp');
        Config::set('mail.mailers.smtp.host', $smtpSettings->mail_host);
        Config::set('mail.mailers.smtp.port', $smtpSettings->mail_port);
        Config::set('mail.mailers.smtp.encryption', $smtpSettings->mail_encryption);
        Config::set('mail.mailers.smtp.username', $smtpSettings->mail_username);
        Config::set('mail.mailers.smtp.password', $smtpSettings->mail_password);
        Config::set('mail.from.address', env('MAIL_FROM_ADDRESS'));
        Config::set('mail.from.name', env('MAIL_FROM_NAME'));

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name'])
                    ->subject($data['subject']);
            $message->from(config('mail.from.address'), config('mail.from.name'));
        });

        return back()->with('success', 'Email sent successfully!');
    }
}
