<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'telefone' => 'required|max:20'
        ];
    }

    public function messages(){
        return [
            'nome.*'=>'Nome obrigatório, maximo 100 caracteres',
            'telefone.*'=>'Telefone obrigatorio maximo de 20 caracteres'
        ];
    }
}
