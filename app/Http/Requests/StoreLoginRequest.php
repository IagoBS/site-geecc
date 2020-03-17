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
            'email' => 'email|required|min:2|max:50',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'email.email' => 'Insira um e-mail válido',
            'email.required' => 'E-mail é obrigátorio',
            'password.required' => 'Senha é obrigátorio'
        ];
    }
}
