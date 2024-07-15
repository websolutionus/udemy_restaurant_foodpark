<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    function sender() : BelongsTo {
        return $this->belongsTo(User::class, 'sender_id')->select('id', 'avatar');
    }

    function receiver() : BelongsTo {
        return $this->belongsTo(User::class, 'receiver_id')->select('id', 'avatar');
    }
}
