<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Merch;
use App\Models\Albums;
use App\Models\ArtistProfileSettings;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artist extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guard = 'artists';
    protected $table = 'artists';
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
    
    public function albums(): HasMany
    {
        return $this->hasMany(Albums::class, 'email', 'email');
    }

    public function merches(): HasMany
    {
        return $this->hasMany(Merch::class, 'email', 'email');
    }

    public function profiles(): HasMany
    {
        return $this->hasMany(ArtistProfileSettings::class, 'email', 'email');
    }


    
}
