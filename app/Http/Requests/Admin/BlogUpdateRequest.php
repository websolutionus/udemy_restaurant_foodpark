<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
        $id = $this->blog;

        return [
            'image' => ['nullable', 'image'],
            'title' => ['required', 'max:255', 'unique:blogs,title,'. $id],
            'category' => ['required'],
            'description' => ['required'],
            'seo_title' => ['max:255'],
            'seo_description' => ['max:255'],
            'status' => ['required', 'boolean']
        ];
    }
}
