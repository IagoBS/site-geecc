<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'name' => 'required|min:1',
            'email' => 'email|min:1|max:100',
            'telephone' => 'required',
            'message' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Obrigatório inserir nome',
            'email.email' => 'E-mail inválido',
            'email.min' => 'E-mail é nescessário pelo menos ',
            'telephone.required' => 'É obrigatório  inserir telefone',
            'message.required' => 'É obrigatório inserir mensagem'

        ];
    }
}
