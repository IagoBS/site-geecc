<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|min:1|max:100',
            'email' => 'required|email|min:1|max:100',
            'about' => 'min:1|max:100000',
            'password' => 'required|min:5',
            'photo' => 'image'
        ];
    }
    public function messages()
    {
    return [
        'name.required' => 'Necessário inserir nome de usuário',
        'name.min' => 'Usuário deve ter pelo menos 1 caractere',
        'email.required' => 'Necessário inserir email do usuário',
        'email.email' => 'E-mail inválido, tente novamente',
        'about.min' => 'Sobre deve ter pelo menos 1 caractere',
        'photo.image' => 'Erro ao fazer upload da imagem, tente novamente'
    ];
    }
}
