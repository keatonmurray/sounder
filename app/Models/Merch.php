<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merch extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'merches';
    
    public function artists(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
