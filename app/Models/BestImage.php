<?php

namespace App\Models;

use App\Exceptions\BusinessException;
use App\Models\BestImage\Interaction;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected $withCount = ['votes', 'likes'];

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
        return $this->hasMany(Interaction::class, 'best_image_id')->where('type', 'like');
    }

    public function votes(): HasMany
    {
        return $this->hasMany(Interaction::class, 'best_image_id')->where('type', 'vote');
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

        if ($this->user_id === $user->id) {
            throw new BusinessException('ما تعطي نفسك لايك يا وحش 🌚');
        }
        $this->likes()->create([
            'interacted_by' => $user->id,
        ]);
    }

    public function unlike(User $user): void
    {
        $this->likes()->where('interacted_by', $user->id)->delete();
    }

    public function isLikedBy(User $user): bool
    {
        return $this->likes()->where('interacted_by', $user->id)->exists();
    }

    public function vote(User $user)
    {
        if ($this->isVotedBy($user)) {
            $this->unvote($user);
            return;
        }

        $this->votes()->create([
            'interacted_by' => $user->id,
            'type' => 'vote',
        ]);
    }

    public function unvote(User $user)
    {
        $this->votes()->where('interacted_by', $user->id)->delete();
    }

    public function isVotedBy(User $user): bool
    {
        return $this->votes()->where('interacted_by', $user->id)->exists();
    }
}
