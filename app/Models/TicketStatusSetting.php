<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketStatusSetting extends Model
{
    use HasFactory;

    // You don't need to define $primaryKey if it's the default 'id'
    protected $fillable = [
        'Name_ar',
        'Name_en',
        'Description_ar',
        'Description_en',
    ];

    // Relationship to tickets
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'StatusID');
    }

    // Prevent deletion if the status is linked to any tickets
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($status) {
            if ($status->tickets()->count() > 0) {
                throw new \Exception("Unable to delete Status as it's linked to active tickets.");
            }
        });
    }
}
