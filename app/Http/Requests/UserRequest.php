<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name'  => 'required|min:3',
            'email' => 'required|email',

        ];
    }

    public function messages()
    {
        return [
            'name.required'     =>  'Nome do usuário é obrigatório.',
            'name.min'          =>  'Nome de usuário deve ter pelo menos :min caracteres.',
            'email.required'    =>  'E-mail do usuário é necessário.',
            'email.unique'      =>  'E-mail já está em uso por outro usuário'
        ];
    }
}
