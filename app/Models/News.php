<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_en',
        'title_ar',
        'content_en',
        'content_ar',
        'author_id',
        'post_date',
        'image',
        'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'post_date' => 'date',
    ];

    /**
     * Get the author of the blog post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    protected $dates = ['created_at', 'updated_at'];

    public function getTitleAttribute()
    {
        $locale = App::getLocale(); // Get the current locale

        // Choose the right column based on locale
        return $this->{'title_' . $locale} ?? $this->title_en; // Fallback to English
    }
    public function getContentAttribute()
    {
        $locale = App::getLocale(); // Get the current locale

        // Choose the right column based on locale
        return $this->{'content_' . $locale} ?? $this->content_en; // Fallback to English
    }
}
