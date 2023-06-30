<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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

    public function steps(): HasMany
    {
        return $this->hasMany(Steps::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(BestImage::class);
    }

    public function isUser(): bool
    {
        return $this->role == 'user';
    }

    public function isAdmin(): bool
    {
        return $this->role == 'admin';
    }

    public function isVoter(): bool
    {
        return $this->role == 'voter';
    }

    public function makeAsAdmin(): self
    {
        $this->update(['role' => 'admin',]);

        return $this;
    }

    public function makeAsVoter(): self
    {
        $this->update(['role' => 'voter',]);

        return $this;
    }

    public function makeAsUser(): self
    {
        $this->update(['role' => 'user',]);

        return $this;
    }
}
