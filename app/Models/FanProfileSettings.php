<?php

namespace App\Models;

use App\Models\Fan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FanProfileSettings extends Model
{
    use HasFactory;

    protected $table = 'fans_profile';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function fans(): BelongsTo
    {
        return $this->belongsTo(Fan::class, 'email', 'email');
    }
}
