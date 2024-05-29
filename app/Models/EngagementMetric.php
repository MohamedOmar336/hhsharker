<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngagementMetric extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'message_id', 'user_id', 'action'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
