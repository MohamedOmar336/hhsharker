<?php

// app/Providers/SmtpServiceProvider.php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use App\Models\SmtpSettings;

class SmtpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Load SMTP settings from the database and override the configuration
        $this->app->booted(function () {
            $smtpSettings = SmtpSettings::find(1); // Adjust this to fetch the correct settings based on your setup
            if ($smtpSettings) {
                Config::set('mail.driver', $smtpSettings->mail_driver);
                Config::set('mail.host', $smtpSettings->mail_host);
                Config::set('mail.port', $smtpSettings->mail_port);
                Config::set('mail.username', $smtpSettings->mail_username);
                Config::set('mail.password', $smtpSettings->mail_password);
                Config::set('mail.encryption', $smtpSettings->mail_encryption);
            }
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
