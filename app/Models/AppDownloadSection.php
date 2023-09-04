<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDownloadSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'background',
        'title',
        'short_description',
        'play_store_link',
        'apple_store_link'
    ];
}
