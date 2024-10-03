<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'parent_id',
        'level',
        'id_path',
        'slug',
        'active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Get the products associated with the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        // Define a many-to-many relationship with the Product model
        // This indicates that a category can have multiple products
        return $this->belongsToMany(Product::class);
    }

    /**
     * Get the parent category associated with the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategory()
    {
        // Define a relationship with the Category model to get the parent category
        // This indicates that a category belongs to another category (parent category)
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function getNameAttribute()
    {
        $locale = App::getLocale(); // Get the current locale
        
        // Choose the right column based on locale
        return $this->{'name_' . $locale} ?? $this->name_en; // Fallback to English
    }
    
    public function getDescriptionAttribute()
    {
       $locale = App::getLocale(); // Get the current locale
       
       // Choose the right column based on locale
       return $this->{'description_' . $locale} ?? $this->description_en; // Fallback to English
    }

    public function getHomeApplienceProductByCateories($mainCat,$subCat){

        $where = [
            'type' => 'HomeAppliance',
            'category'=>$mainCat
        ];
        if($subCat != 'all'){
            $where['sub_category'] = $subCat;
        }
        return $allProductArr = Product::where($where)->latest()->get();
    }
}