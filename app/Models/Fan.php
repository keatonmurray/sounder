<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Wishlists;
use App\Models\Collections;
use Laravel\Sanctum\HasApiTokens;
use App\Models\FanProfileSettings;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Fan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guard = 'web';
    protected $table = 'fans';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profiles(): HasMany
    {
        return $this->hasMany(FanProfileSettings::class, 'email', 'email');
    }

    public function collections(): HasMany {
        return $this->hasMany(Collections::class, 'email', 'email');
    }

    public function wishlists(): HasMany
    {
        return $this->hasMany(Wishlists::class, 'email', 'email');
    }
}
