<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectRequest extends Request
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
            'name'              => 'required|min:6',
            'teacher'           => 'required',
            'course'            => 'required',
            'start'             => 'required|min:10',
            'types'             => 'required',
            'status'            => 'required'
            ];
    }
    public function messages()
    {
        return [
            'name.required'         =>  'Nome do projeto é obrigatório.',
            'name.min'              =>  'Nome de projeto deve ter pelo menos :min caracteres.',
            'course.required'       =>  'O projeto deve pertencer a algum curso.',
            'teacher.required'      =>  'O projeto deve ter um professor responsável.',
            'types.required'        =>  'O projeto deve ter pelo menos um tipo',
            'status.required'       =>  'O projeto deve ter uma situação definida',
        ];
    }
}
