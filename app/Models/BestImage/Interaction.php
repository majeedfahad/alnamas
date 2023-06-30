<?php

namespace App\Models\BestImage;

use App\Models\BestImage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interaction extends Model
{
    use HasFactory;

    protected $table = 'best_images_interactions';

    protected $guarded = [];

    public function image(): BelongsTo
    {
        return $this->belongsTo(BestImage::class, 'best_image_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'interacted_by');
    }

    public function scopeToday()
    {
        return static::query()
            ->whereDate('created_at', today());
    }

    public static function userVotedToday(User $user): bool
    {
        return static::query()->today()->where([
            'interacted_by' => $user->id,
            'type' => 'vote',
        ])->exists();
    }

    public static function userNotVotedToday(User $user): bool
    {
        return !static::userVotedToday($user);
    }
}
