<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNews extends FormRequest
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
            'title' => 'required|min:1|max:50',
            'content' => 'required|min:1',
            'about' => 'min:1',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nome obrigatório',
            'title.required' => 'Título da notícia é obrigatório',
            'title.min' => 'Título deve teve ter pelo menos 1 caractere',
            'content.max' => 'Título não pode ter mais que 50 caracteres',
            'content.required' => 'Texto na notícia é obrigatório',
            'content.min' => 'Texto da notícia deve ter pleo menos 1 caractere',
            'about.min' => 'Sobre você teve ter pelo menos 1 caractere'
        ];
    }
}
