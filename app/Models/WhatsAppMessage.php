<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsAppMessage extends Model
{
    use HasFactory;

    protected $table = 'whatsapp_messages'; // Ensure this matches your actual database table name

    protected $fillable = ['whatsapp_contact_id', 'message', 'direction' , 'type'];

    // Relationship with WhatsAppContact
    public function contact()
    {
        return $this->belongsTo(WhatsAppContact::class, 'whatsapp_contact_id');
    }
}
