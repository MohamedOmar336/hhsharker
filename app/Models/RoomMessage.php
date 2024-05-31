<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomMessage extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = array('message', 'sender_id', 'room_id', 'read');

    // Define the table associated with the model
    protected $table = "room_messages";

    // Define the relationship with the sender of the message
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
