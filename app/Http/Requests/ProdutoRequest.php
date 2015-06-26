<?php

namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request
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
        'nome'=>'required|max:100',
        'descricao'=>'required|max:255',
        'valor'=>'required|numeric|min:0',
        'quantidade' => 'required|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute  não pode ficar vazio',
            'numeric'  => 'O campo :attribute só aceita valores numericos',
            'max'      => 'O campo :attribute excedeu o limite de Caracteres',
            'min'      => 'O campo :attribute não pode ser negativo'

                ];
    }
}
