<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ChefUpdateRequest extends FormRequest
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
            'image' => ['nullable', 'image'],
            'name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'fb' => ['nullable','max:255', 'url'],
            'in' => ['nullable', 'max:255', 'url'],
            'x' => ['nullable', 'max:255', 'url'],
            'web' => ['nullable', 'max:255', 'url'],
            'show_at_home' => ['required', 'boolean'],
            'status' => ['required', 'boolean'],
        ];
    }
}
