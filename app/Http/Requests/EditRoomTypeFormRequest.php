<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRoomTypeFormRequest extends FormRequest
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
            'room_type' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'string'],
            'tv' => ['nullable', 'string'],
            'bed' => ['nullable', 'string'],
            'balcony' => ['nullable', 'string'],
            'pet' => ['nullable', 'string'],
            'box' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
            'wifi' => ['nullable', 'string'],
            'netflix' => ['nullable', 'string'],
            'air_condition' => ['nullable', 'string'],
            'loundry' => ['nullable', 'string'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,PNG,JPG,JPEG'],
            'room_images' => ['nullable', 'array']
        ];
    }
}
