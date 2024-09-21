<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketHistory extends Model
{
    use HasFactory;

    protected $primaryKey = 'HistoryID';

    protected $table = 'ticket_history';

    protected $fillable = [
        'id',
        'TicketID',
        'ChangedBy',
        'ChangeDescription',
        'AssignedTo',
        'ChangedAt',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'TicketID');
    }

    public function changedBy()
    {
        return $this->belongsTo(User::class, 'ChangedBy');
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'AssignedTo');
    }
}
