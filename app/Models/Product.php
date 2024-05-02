<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
<<<<<<< HEAD
=======
    use HasFactory;

>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
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
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
}
