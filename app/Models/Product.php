<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'product_name_en',
        'product_name_ar',
        'model_number',
        'product_option_title',
        'product_option_list',
        'main_option',
        'feature_title_en',
        'feature_description_en',
        'feature_icon_en',
        'feature_title_ar',
        'feature_description_ar',
        'feature_icon_ar',
        'characteristics_en',
        'characteristics_description_en',
        'characteristics_icon_en',
        'characteristics_ar',
        'characteristics_description_ar',
        'characteristics_icon_ar',
        'technical_specification',
        'saso',
        'product_image',
        'group',
        'category',
        'sub_category',
        'child',
        'sub_child',
        'status',
        'best_selling',
        'featured',
        'recommened',
        'title_tag_en',
        'title_tag_ar',
        'meta_description_en',
        'meta_description_ar',
        'product_schema_en',
        'product_schema_ar',
    ];

    protected $casts = [
        'product_option_list' => 'array',
        'characteristics_en' => 'json',
        'characteristics_ar' => 'json',
        'product_schema_en' => 'json',
        'product_schema_ar' => 'json',
        'best_selling' => 'boolean',
        'featured' => 'boolean',
        'recommened' => 'boolean',
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
        return $this->hasMany(Characteristic::class, 'id');
    }
}
