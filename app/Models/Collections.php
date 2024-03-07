<?php

namespace App\Models;

use App\Models\Fan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Collections extends Model
{
    use HasFactory;

    protected $table = 'collections';
    protected $primaryId = 'id';
    protected $guarded = [];

    public function fan(): BelongsTo
    {
        return $this->belongsTo(Fan::class, 'email', 'email');
    }
}
