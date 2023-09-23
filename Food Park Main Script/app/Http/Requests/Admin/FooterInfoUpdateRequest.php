<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FooterInfoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'short_info' => ['nullable', 'max:2000'],
            'address' => ['nullable', 'max:255'],
            'phone' =>['nullable', 'max:255'],
            'email' =>['nullable', 'max:255'],
            'copyright' =>['nullable', 'max:255']
        ];
    }
}
