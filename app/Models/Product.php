<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'product_name_ar',
        'product_name_en',
        'product_description_ar',
        'product_description_en',
        'category_id',
        'subcategory_id',
        'model_number',
        'status',
        'catalog',
        'image',
        'characteristics_en',
        'characteristics_ar',
        'optional_features_ar',
        'optional_features_en',
        'best_selling',
        'featured',
        'recommended',
        'hp_dimensions_volume_en',
        'hp_dimensions_volume_ar',
        'color',
        'power_supply',
        'type_freon',
        'technical_specifications',
        'saso_certificate',
    ];

    protected $casts = [
        'characteristics_en' => 'json',
        'characteristics_ar' => 'json',
        'best_selling' => 'boolean',
        'featured' => 'boolean',
        'recommended' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Category::class, 'subcategory_id');
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class, 'product_id');
    }
}
