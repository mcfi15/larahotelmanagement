<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormReques extends FormRequest
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
            'position' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'gender' => ['required', 'string'],
            'passport' => ['nullable', 'mimes:jpg,png,jpeg,PNG,JPG,JPEG']
        ];
    }
}
