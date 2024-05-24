<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $primaryKey = 'TicketID';

    protected $fillable = [
        'Title',
        'Description',
        'PriorityID',
        'StatusID',
        'AssignedTo',
        'CreatedBy',
    ];

    public function priority()
    {
        return $this->belongsTo(TicketPrioritySetting::class, 'PriorityID');
    }

    public function status()
    {
        return $this->belongsTo(TicketStatusSetting::class, 'StatusID');
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'AssignedTo');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'CreatedBy');
    }


   /* protected static function booted()
    {
        static::created(function ($ticket) {
            TicketHistory::create([
                'TicketID' => $ticket->id,
                'ChangedBy' => $ticket->CreatedBy, // Assuming CreatedBy is the user who created the ticket
                'ChangeDescription' => 'Ticket created'
            ]);
        });

        static::updated(function ($ticket) {
            TicketHistory::create([
                'TicketID' => $ticket->id,
                'ChangedBy' => auth()->id(), // Assuming the current authenticated user made the change
                'ChangeDescription' => 'Ticket updated'
            ]);
        });
    }*/
    public function history()
    {
        return $this->hasMany(TicketHistory::class, 'TicketID');
    }
}
