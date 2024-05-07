<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostTag extends Model
{
    use HasFactory;
    protected $table = 'blog_post_tag';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'blog_post_id',
        'tag_id',
    ];

    /**
     * Define a many-to-many relationship with the Tag model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Define a many-to-many relationship with the BlogPost model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class);
    }
}
