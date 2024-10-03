<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'parent_id',
        'type',
        'product_name_en',
        'product_name_ar',
        'model_number',
        'product_option_title',
        'product_option_list',
        'main_option',
        'feature_en',
        'feature_ar',
        'status', // Assuming status is relevant, modify or remove if not needed
        'saso',  // If still relevant, otherwise remove or adjust
        // 'product_image',
        'group',
        'category',
        'sub_category',
        'child',
        'sub_child',
        'best_selling',
        'featured',
        'recommened',
        'title_tag_en',
        'title_tag_ar',
        'meta_description_en',
        'meta_description_ar',
        'product_schema_en',
        'product_schema_ar',
        'technical_specification',
    ];

    protected $casts = [
        'product_option_list' => 'array',
        'feature_en' => 'json',
        'feature_ar' => 'json',
        'product_schema_en' => 'json',
        'product_schema_ar' => 'json',
        'best_selling' => 'boolean',
        'featured' => 'boolean',
        'recommened' => 'boolean',
        'product_image' => 'array', // Cast product_image as an array to handle multiple images
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }

    public function subcategory()
    {
        return $this->belongsTo(Category::class, 'sub_category');
    }

    public function characteristics()
    {
        return $this->hasMany(Characteristic::class, 'product_id');
    }

    public function parent()
    {
        return $this->belongsTo(Product::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Product::class, 'parent_id');
    }

    public function getNameAttribute()
    {
        $locale = App::getLocale(); // Get the current locale

        // Choose the right column based on locale
        return $this->{'product_name_' . $locale} ?? $this->product_name_en; // Fallback to English
    }

    public function getDescriptionAttribute()
    {
        $locale = App::getLocale(); // Get the current locale

        // Choose the right column based on locale
        return $this->{'product_description_' . $locale} ?? $this->product_description_en; // Fallback to English
    }
}
