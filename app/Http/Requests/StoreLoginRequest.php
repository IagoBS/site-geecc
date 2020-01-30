<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|max:255|email',
            'password' => 'required|min:6|max:30'
        ];
    }
    public function messages()
    {
        return [
            'email.email' => 'email inválido',
            'email.required' => 'Obrigatório colocar email',
            'email.email' => 'email não pode possuir mais que 255 caracteres',
            'password.required' => 'Senha é obrigatória',
            'password.min' => 'senha deve ter no mínimo 6 caracteres',
            'password.max' => 'senha deve ter no máximo 30 caracteres'
        ];
    }
}
