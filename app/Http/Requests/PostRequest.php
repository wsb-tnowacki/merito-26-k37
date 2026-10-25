<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
            [
            'tytul' => [
                'required',
                'min:3',
                'max:200'
                ],
            'autor' => 'required|min:2|max:100',
            'email' => 'required|email:rfc,dns|min:3|max:200',
            'tresc' => 'required|min:5'
        ];
    }
    public function messages(): array
    {
        return [
            'required' => "Pole :attribute jest wymagane",
            'min' => "Minimalna liczba znaków to :min",
            'max' => "Maksymalna liczba znaków to :max",
            'email' => "Podaj prawidłowy email"
        ];
    }
}
