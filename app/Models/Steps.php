<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        'approved' => 'boolean',
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

    public function scopeApproved(Builder $query)
    {
        return $query->where('approved', true);
    }

    public function scopePending(Builder $query)
    {
        return $query->where('approved', null);
    }

    public function scopeRejected(Builder $query)
    {
        return $query->where('approved', false);
    }

    public static function create(array $data): self
    {
        $step = static::query()->create([
            'count' => $data['count'],
            'user_id' => auth()->user()->id,
            'approved' => null,
        ]);

        $step->addMediaFromRequest('image')
            ->toMediaCollection();

        return $step;
    }

    public function isApproved(): bool
    {
        return $this->approved === true;
    }

    public function isPending(): bool
    {
        return $this->approved === null;
    }

    public function isRejected(): bool
    {
        return $this->approved === false;
    }

    public function approve(): self
    {
        $this->update(['approved' => true]);

        return $this;
    }

    public function reject(): self
    {
        $this->update(['approved' => false]);

        return $this;
    }
}
