<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogComment extends Model
{
    use HasFactory;

    function blog() : BelongsTo {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }

    function user() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
