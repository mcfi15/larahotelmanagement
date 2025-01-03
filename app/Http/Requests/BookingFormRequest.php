<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'room_id' => ['required', 'integer'],
            'customer_id' => ['required', 'integer'],
            'checkin' => ['required', 'string'],
            'checkout' => ['required', 'string'],
            'adults_booking' => ['required', 'string'],
            'childs_booking' => ['required', 'string'],
        ];
    }
}
