<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomMessage extends Model
{
    use HasFactory;

    protected $fillable = array('message', 'sender_id', 'room_id' , 'read');

    protected $table = "room_messages";

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
