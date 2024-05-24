<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'appointments';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'title',
        'user_id',
        'with_user_id',
        'start_time',
        'finish_time',
        'status',
        'notes',
    ];

    // Define the date attributes to be mutated to instances of Carbon
    protected $dates = [
        'start_time',
        'finish_time',
    ];

    /**
     * Get the user who created the appointment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user with whom the appointment is scheduled.
     */
    public function withUser()
    {
        return $this->belongsTo(User::class, 'with_user_id');
    }
}
