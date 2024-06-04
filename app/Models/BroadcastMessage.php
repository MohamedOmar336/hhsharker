<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BroadcastMessage extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'message', 'scheduled_at'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
