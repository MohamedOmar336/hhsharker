<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SmtpSettings;

class SmtpSettingsSeeder extends Seeder
{
    public function run()
    {
        SmtpSettings::create([
            'mail_driver' => 'smtp',
            'mail_host' => 'smtp.mailtrap.io',
            'mail_port' => 2525,
            'mail_username' => 'username',
            'mail_password' => 'password',
            'mail_encryption' => 'tls',
        ]);
    }
}
