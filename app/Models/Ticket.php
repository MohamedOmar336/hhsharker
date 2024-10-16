<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Ticket extends Model
{
    use HasFactory , LogsActivity;

    // protected $primaryKey = 'TicketID';

    const PREFIX = 'TK-';

    protected $fillable = [
        'TicketID',
        'Title',
        'Description',
        'PriorityID',
        'StatusID',
        'AssignedTo',
        'note',
    ];

    // Function to generate the unique TicketID
    public static function generateTicketID()
    {
        $year = date('Y'); // Get the current year
        $latestTicket = self::latest()->first(); // Get the latest ticket

        $id_num = $latestTicket ? $latestTicket->id + 1 : 1; // Increment ID number or start at 1
        return self::PREFIX . str_pad($id_num, 5, '0', STR_PAD_LEFT) . '-' . $year;
    }

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
        return $this->morphTo('createdBy', 'creator_type', 'creator_id');
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

    /**
     * Activity Log
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'text'])
            ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}");
    }

    public function categories()
    {
        return $this->belongsToMany(TicketCategory::class, 'ticket_ticket_category', 'ticket_id', 'ticket_category_id');
    }
}
