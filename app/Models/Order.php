<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    function deliveryArea() : BelongsTo {
        return $this->belongsTo(DeliveryArea::class);
    }

    function userAddress() : BelongsTo {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    function orderItems() : HasMany {
        return $this->hasMany(OrderItem::class);
    }
}
