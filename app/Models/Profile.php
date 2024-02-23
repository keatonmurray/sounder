<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'artist_profile';
    protected $primaryKey = 'id';
    
    public function artists(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
