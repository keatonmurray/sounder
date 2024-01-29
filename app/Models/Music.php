<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Complete search bar functionality
 */

class Music extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    protected $casts = [
        'audios' => 'array'
    ];
}
