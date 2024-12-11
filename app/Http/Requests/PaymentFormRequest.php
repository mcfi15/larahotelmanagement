<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentFormRequest extends FormRequest
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
            'booking_id' => ['required', 'integer'],
            'type' => ['required', 'string'],
            'amount' => ['required', 'integer'],
            'payment_type' => ['required', 'string'],
            'payment_details' => ['required', 'string'],
            'payment_date' => ['required', 'string']
        ];
    }
}
