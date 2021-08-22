<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicamentoRequest extends FormRequest
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
            'nome' => "bail|required|min:3|max:100|unique:medicamentos,nome,$this->medicamento",
            'peso' => 'bail|required|min:1',
            'quantidade' => 'bail|required|min:1',
            'marca' => 'bail|required|min:1',
            'fabricante_id' => 'bail|required|min:1',
            'valor' => 'bail|required|min:1|max:50'
        ];
    }


    // Customizar o nome dos campos para as msgs de erro
    public function attributes()
    {
        return [
            'fabricante_id' => 'fabricante'
        ];
    }

    // Customizar as msgs de erro para uma regra ou para um campo/regra
    public function messages()
    {
        return [
            'fabricante_id.required' => 'Favor selecionar uma opção'
        ];
    }
}
