<?php

namespace App\Http\Requests;

use App\Exceptions\BusinessException;
use App\Models\Steps;
use App\Models\User;
use App\Rules\OnceADay;
use RealRashid\SweetAlert\Facades\Alert;
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
            'image' => [
                'required',
                'image',
                'max:2048',
//                new OnceADay(Steps::class),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'image.required' => 'نسيتا الصورة',
            'image.image' => 'صورة الله يخليك ارفع صورة',
            'image.max' => 'معليش السيرفر زحمة لازم صورة اقل من 2MB',
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator): void
    {
        Alert::error('اوووووووووووبس', $validator->errors()->first());
        parent::failedValidation($validator);
    }
}
