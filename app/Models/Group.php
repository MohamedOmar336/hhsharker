<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'created_by'];

    public function members()
    {
        return $this->belongsToMany(User::class, 'group_members');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function broadcasts()
    {
        return $this->hasMany(BroadcastMessage::class);
    }

    public function metrics()
    {
        return $this->hasMany(EngagementMetric::class);
    }
}
