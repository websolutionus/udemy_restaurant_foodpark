<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPlacedNotification extends Model
{
    use HasFactory;

    protected $fillable = ['seen'];
}
