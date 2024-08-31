<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'characteristics';

    // The attributes that are mass assignable
    protected $fillable = [
        'product_id',
        'image',
        'Characteristic_name_en',
        'Characteristic_name_ar',
        'Characteristic_description_en',
        'Characteristic_description_ar',
    ];

    /**
     * Get the product that owns the characteristic.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
