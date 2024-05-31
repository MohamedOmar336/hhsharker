<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Room extends Model
{
    use HasFactory , LogsActivity;

    // Define the table associated with the model
    protected $table = 'room';

    // Define the fillable attributes for mass assignment
    protected $fillable = array('admin_id_one', 'admin_id_two');

    // Define the relationship with the first admin user
    public function adminIdOne()
    {
        return $this->belongsTo(User::class, 'admin_id_one');
    }

    // Define the relationship with the second admin user
    public function adminIdTwo()
    {
        return $this->belongsTo(User::class, 'admin_id_two');
    }

    // Define the relationship with messages in the room
    public function messages()
    {
        return $this->hasMany(RoomMessage::class, 'room_id')->with('sender');
    }


    /**
     * Activity Log
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'text'])
            ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}");
    }

}
