<?php

namespace App\Models;

use App\Models\Fan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlists extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $table = 'wishlists';

    public function fans(): BelongsTo
    {
        return $this->belongsTo(Fan::class, 'email', 'email');
    }
}
