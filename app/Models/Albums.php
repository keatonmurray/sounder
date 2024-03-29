<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Albums extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = 'albums';
    protected $primaryKey = 'id';

    protected $casts = [
        'audios' => 'array'
    ];

    public function artists(): BelongsTo
    {
        return $this->belongsTo(Artist::class, 'email', 'email');
    }
}
