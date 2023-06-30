<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Steps extends Model implements HasMedia
{
    use HasFactory,
        InteractsWithMedia;

    protected $table = 'steps';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeToday()
    {
        return static::query()
            ->whereDate('created_at', today());
    }

    public static function create(array $data): self
    {
        $step = static::query()->create([
            'count' => $data['count'],
            'user_id' => auth()->user()->id,
        ]);

        $step->addMediaFromRequest('image')
            ->toMediaCollection();

        return $step;
    }

    public function isApproved()
    {
        return $this->approved;
    }

    public function approve()
    {
        $this->update(['approved' => true]);

        return $this;
    }

    public function disapprove(): static
    {
        $this->update(['approved' => false]);

        return $this;
    }
}
