<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmtpSettings extends Model
{
    protected $fillable = [
        'mail_driver',
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_encryption',
    ];

    // Define any additional logic or relationships here
}
