<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    function category() : BelongsTo {
        return $this->belongsTo(BlogCategory::class, 'category_id', 'id');
    }

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    function comments() : HasMany {
        return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    }
}
