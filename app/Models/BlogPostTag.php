<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostTag extends Model
{
    use HasFactory;
   // protected $table = 'blog_post_tag';

    protected $fillable = [
        'blog_post_id',
        'tag_id',
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class);
    }


}