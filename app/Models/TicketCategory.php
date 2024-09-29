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

    /**
     * Get the tickets associated with the category.
     */
    public function tickets()
    {
        return $this->belongsToMany(Ticket::class, 'ticket_ticket_category', 'ticket_category_id', 'ticket_id');
    }

    /**
     * Prevent deletion if the category is linked to any tickets.
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($ticketCategory) {
            // Check if the category has any tickets linked
            if ($ticketCategory->tickets()->count() > 0) {
                throw new \Exception("Unable to delete category as it's linked to active tickets.");
            }
        });
    }
}
