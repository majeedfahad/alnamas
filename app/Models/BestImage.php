<?php

namespace App\Models;

use App\Models\BestImage\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class BestImage extends Model implements HasMedia
{
    use HasFactory,
        InteractsWithMedia;

    protected $table = 'best_images';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class, 'best_image_id');
    }

    public function scopeToday()
    {
        return static::query()
            ->whereDate('created_at', today());
    }

    public static function create(): self
    {
        $image = static::query()->create([
            'user_id' => auth()->user()->id,
        ]);

        $image->addMediaFromRequest('image')
            ->toMediaCollection();

        return $image;
    }

    public function like(User $user): void
    {
        if ($this->isLikedBy($user)) {
            $this->unlike($user);
            return;
        }

        $this->likes()->create([
            'liked_by' => $user->id,
        ]);
    }

    public function unlike(User $user): void
    {
        $this->likes()->where('liked_by', $user->id)->delete();
    }

    private function isLikedBy(User $user): bool
    {
        return $this->likes()->where('liked_by', $user->id)->exists();
    }
}
