<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtistProfileSettings extends Model
{
    use HasFactory;

    protected $table = 'artists_profile';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function artists(): BelongsTo
    {
        return $this->belongsTo(Artist::class, 'email', 'email');
    }
}
