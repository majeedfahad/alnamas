<?php

namespace App\Http\Requests;

use App\Exceptions\BusinessException;
use App\Models\BestImage;
use App\Rules\OnceADay;
use Illuminate\Foundation\Http\FormRequest;

class BestImageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'image' => [
                'required',
                'image',
                'max:2048',
                new OnceADay(BestImage::class),
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
        throw new BusinessException($validator->errors()->first());
        parent::failedValidation($validator);
    }
}
