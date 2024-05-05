<?php

// app\Models\Comment.php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id', 'commenter', 'email', 'comment', 'comment_date',
    ];

    protected $casts = [
        'comment_date' => 'date',
    ];

    public function post()
    {
        return $this->belongsTo(BlogPost::class);
    }

}
