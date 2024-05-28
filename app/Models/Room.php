<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'room';

    protected $fillable = array( 'admin_id_one', 'admin_id_two');

    public function adminIdOne()
    {
        return $this->belongsTo(User::class, 'admin_id_one');
    }

    public function adminIdTwo()
    {
        return $this->belongsTo(User::class, 'admin_id_two');
    }

    public function messages()
    {
        return $this->hasMany(RoomMessage::class, 'room_id')->with('sender');
    }
}
