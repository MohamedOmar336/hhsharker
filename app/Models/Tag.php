<?php

// app\Models\Tag.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_en', 'name_ar',
    ];

    /**
     * Get the blog posts associated with the tag.
     */
    public function posts()
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_tag');
    }
}
