<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class GroupContact extends Model
{
    use HasFactory;

    protected $fillable = ['group_id', 'contact_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
