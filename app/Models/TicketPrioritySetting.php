<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPrioritySetting extends Model
{
    use HasFactory;

    protected $primaryKey = 'PriorityID';

    protected $fillable = [
        'Name_ar',
        'Name_en',
        'Status',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'PriorityID');
    }
}
