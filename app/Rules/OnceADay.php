<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OnceADay implements ValidationRule
{
    protected $class;
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $userSteps = $this->class::query()->where('user_id', auth()->user()->id)->get();

        // check if the user has already uploaded an image today
        $userSteps->each(function ($step) use ($fail) {
            if (now()->isSameDay($step->created_at)) {
                $fail('ما ترفع صورتين في نفس اليوم ياذيبان/ة');
            }
        });
    }
}
