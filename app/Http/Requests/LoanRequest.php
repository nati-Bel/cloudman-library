<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanRequest extends FormRequest
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
            'borrowed_by' => 'required|string|min:3|max:30',
            'checkout_date'=> 'required|date'
        ];
    }

    public function messages():array
    {
        return [
            'borrowed_by.required'=> 'Obligatorio indicar el nombre.',
            'borrowed_by.min'=> 'El nombre tiene que tener por lo menos 3 caracteres.',
            'borrowed_by.max'=> 'El nombre tiene que tener como mucho 30 caracteres.',
            'checkout_date.required'=> 'Obligatorio indicar la fecha de préstamo',
            'checkout_date.date'=> 'La fecha no tiene formato válido',

        ];
    }
}
