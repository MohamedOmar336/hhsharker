<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Product extends Model
{
    use HasFactory, LogsActivity;

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
        'model_number',
        'power_supply',
        'type_of_freon',
        'characteristics_en',
        'characteristics_ar',
        'optional_features_en',
        'optional_features_ar',
        'catalog_url',
        'color'
    ];

    /**
     * Defines a belongs-to relationship between Product and Category models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Configures the ActivityLog settings for the Product model.
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name_ar', 'name_en', 'price', 'is_available']) // Update this as needed based on what you want to log
            ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}");
    }
}
