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
        'type',
        'product_name_ar',
        'product_name_en',
        'model_number',
        'power_supply',
        'type_freon',
        'product_description_ar',
        'product_description_en',
        'characteristics_ar',
        'characteristics_en',
        'optional_features_ar',
        'optional_features_en',
        'price',
        'status',
        'image',
        'catalog',
        'category',
        'color',
        'dimensions_volume_en',
        'dimensions_volume_ar',
    ];

    protected $casts = [
        'characteristics_ar' => 'json',
        'characteristics_en' => 'json',
        'color' => 'json',
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
            ->logOnly(['product_name_ar', 'product_name_en', 'price', 'is_available']) // Update this as needed based on what you want to log
            ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}");
    }
}
