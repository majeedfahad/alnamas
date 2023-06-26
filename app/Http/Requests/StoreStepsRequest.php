<?php

namespace App\Http\Requests;

use App\Models\Steps;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreStepsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'count' => 'required|integer|min:1',
            'image' => 'required|image',
        ];
    }

    public function validated($key = null, $default = null)
    {
        $this->validateUserSteps();

        return $this->validator->validated();
    }

    private function validateUserSteps()
    {
        $userSteps = Steps::query()->where('user_id', auth()->user()->id)->get();

        // check if the user has already uploaded a step today
        $userSteps->each(function ($step) {
            if (now()->isSameDay($step->created_at)) {
                throw new \Exception("ما ترفع تسجيلين في نفس اليوم ياذيبان/ة");
            }
        });
    }
}
