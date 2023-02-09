<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestValidate extends FormRequest
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
            'name' => 'required|string|min:3|max:50',
            'idade' => 'required|numeric',
            'cep' => 'required|numeric',
            'rua' => 'required',
            'numero' => 'required|numeric',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'O nome é obrigatório',
        'name.string' => 'O nome precisa ser uma string',
        'name.min' => 'O nome precisa ter no mínimo 3 caracteres',
        'name.max' => 'O nome precisa ter no máximo 100 caracteres',

        'idade.required' => 'A idade é obrigatória',
        'idade.numeric' => 'A idade precisa ser um número',

        'cep.required' => 'O cep é obrigatório',
        'cep.numeric' => 'O cep precisa ser um número',

        'rua.required' => 'A rua é obrigatório',

        'numero.required' => 'O número é obrigatório',
        'numero.numeric' => 'Digite somente números',
    ];
}
}
