<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsAppContact extends Model
{
    use HasFactory;

    protected $table = 'whatsapp_contacts'; // Ensure this matches your actual database table name

    protected $fillable = ['phone_number', 'name'];

    // Relationship with WhatsAppMessage
    public function messages()
    {
        return $this->hasMany(WhatsAppMessage::class, 'whatsapp_contact_id');
    }

    public function lastMessage()
    {
        return $this->hasOne(WhatsAppMessage::class, 'whatsapp_contact_id')->latest();
    }
}
