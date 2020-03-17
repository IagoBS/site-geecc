<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstitute extends FormRequest
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
            'name' => 'required',
            'logo' => 'required|image',
            'descripition' => 'required|min:10',
            'email' => 'required|min:10|max:200|email',
        ];
    }
    public function messages() {
        return [

            'name.required' => 'Nome é obrigátorio',
            'logo.required' => 'Logo do instituto é obrigátorio',
            'logo.image' => 'Obrigátorio ser uma imagem',
            'descripition.required' => 'Descrição do instituto é obrigátorio',
            'descripition.min' => 'É nescessário ter pelo menos 10 caracteres na descrição',
            'email.required' => 'É obrigatório colocar email',
            'email.email' => 'Email inserido não é válido'
        ];
    }
}
