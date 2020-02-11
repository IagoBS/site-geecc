<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
            'about' => 'required',
            'logo' => 'required',
            'descripition' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'about' => 'A descrição do projeto é obrigatório',
            'logo' => 'O logo do projeto é obrigatório',
            'descripition' => 'A descrição do projeto é obrigatório'
        ];
    }
}
