<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'segment', 'last_interaction'
    ];


    public function groupMembers()
    {
        return $this->hasMany(GroupMember::class);
    }


    public function groupContacts()
    {
        return $this->hasMany(GroupContact::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_contacts', 'contact_id', 'group_id')->withTimestamps();
    }
}


