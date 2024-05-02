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
<<<<<<< HEAD

    ];

=======
        'category_id',
        'status_id',
    ];
<<<<<<< HEAD
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
=======

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

>>>>>>> 5716ca9a49e1e4481a9ac6a954f2bd5a3d4f1f90
}
