<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductRating extends Model
{
    use HasFactory;

    function user() : BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    function product() : BelongsTo {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
