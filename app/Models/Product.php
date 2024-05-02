<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'slug',
        'price',
        'quantity',
        'is_available',
        'image_url',
        'category_id',
        'status_id',
    ];

    /**
     * Define a many-to-many relationship between Product and Category models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        // Define a many-to-many relationship with the Category model
        // This indicates that a product belongs to one or more categories
        return $this->belongsToMany(Category::class);
    }

}
