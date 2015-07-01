<?php

namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class loginRequest extends Request
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
        'email'=>'required|max:50',
        'password'=>'required|max:20'
        ];
    }
        public function messages()
    {
        return [
            'email.required'=>'O campo email não pode ficar vazio',
            'password.required' => 'O campo Senha não pode ficar vazio',
            'password.min' => 'Senhas devem ter no minimo 6 caracteres',
            'password.max' => 'Senhas devem ter no maximo 20 caracteres'

                ];
    }
}
