<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'parent_id',
        'level',
        'id_path',
        'slug',
        'active'
    ];

    /**
     * Get the parent category.
     */
    public function parent()
    {
        return $this->belongsTo(TicketCategory::class, 'parent_id');
    }

    /**
     * Get the child categories.
     */
    public function children()
    {
        return $this->hasMany(TicketCategory::class, 'parent_id');
    }

    public function tickets()
    {
        return $this->belongsToMany(Ticket::class, 'ticket_ticket_category', 'ticket_category_id', 'ticket_id');
    }
}
