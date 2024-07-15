<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CouponCreateRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'code' => ['required', 'max:50'],
            'quantity' => ['required', 'integer'],
            'min_purchase_amount' => ['required', 'integer'],
            'expire_date' => ['required', 'date'],
            'discount_type' => ['required'],
            'discount' => ['required'],
            'status' => ['required', 'boolean']
        ];
    }
}
