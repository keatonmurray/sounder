<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merch extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'merches';
    protected $primaryKey = 'id';

    /**
     * Get artist that owns the merch
     */
    
    public function artists(): BelongsTo
    {
        return $this->belongsTo(Artist::class, 'email', 'email');
    }
}
