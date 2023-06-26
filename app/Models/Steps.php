<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    use HasFactory;

    protected $table = 'steps';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function validate(): self
    {
        $relatedSteps = self::query()->where('user_id', $this->user_id)->get();

        // check if the user has already uploaded a step today
        $relatedSteps->each(function ($step) {
            if ($this->created_at->isSameDay($step->created_at)) {
                throw new \Exception("ما ترفع تسجيلين في نفس اليوم ياذيبان/ة");
            }
        });

        return $this;
    }
}
