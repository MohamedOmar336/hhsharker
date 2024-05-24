<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketStatusSetting extends Model
{
    use HasFactory;

    protected $primaryKey = 'StatusID';

    protected $fillable = [
        'Name_ar',
        'Name_en',
        'Description_ar',
        'Description_en',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'StatusID');
    }
}
