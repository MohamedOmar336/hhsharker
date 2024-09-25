<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPrioritySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name_ar',
        'Name_en',
        'Status',
    ];

    // Relationship to tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'PriorityID');
    }

    // Prevent deletion if any tickets are linked
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($priority) {
            if ($priority->tickets()->count() > 0) {
                throw new \Exception("Unable to delete Priority as it's linked to active tickets.");
            }
        });
    }
}
