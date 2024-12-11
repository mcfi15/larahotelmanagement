<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequestForm extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'address' => ['nullable', 'string'],
            'name' => ['required', 'string'],
            'room_number' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'gender' => ['required', 'string'],
            'amount_paid' => ['required', 'string'],
            'reason' => ['nullable', 'string'],
            'image' => ['nullable','mimes:jpg,png,jpeg,PNG,JPG,JPEG']
        ];
    }
}
