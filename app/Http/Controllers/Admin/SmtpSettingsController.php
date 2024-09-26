<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SmtpSettings;
use Illuminate\Http\Request;

class SmtpSettingsController extends Controller
{
    public function edit()
    {
        $settings = SmtpSettings::first();
        return view('admin.smtp-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'mail_driver' => 'required|string',
            'mail_host' => 'required|string',
            'mail_port' => 'required|integer',
            'mail_username' => 'required|string',
            'mail_password' => 'required|string',
            'mail_encryption' => 'nullable|string',
        ]);

        $settings = SmtpSettings::first();
        $settings->update($request->all());

        return redirect()->route('smtp-settings.edit')->with('success', __('messages.smtp_settings_updated_successfully'));
    }
}
