<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Product extends Model
{
    use HasFactory , LogsActivity;

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
    ];

    /**
     * Define a many-to-many relationship between Product and Category models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
 
    public function category()
{
    return $this->belongsTo(Category::class);
}


    /**
     * Activity Log
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'text'])
            ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}");
    }

}
