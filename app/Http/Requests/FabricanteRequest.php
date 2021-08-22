<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FabricanteRequest extends FormRequest
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
            'nome' => "bail|required|min:3|max:100|unique:fabricantes,nome,$this->fabricante",
            'cnpj' => 'bail|required|min:14',
            'telefone' => 'bail|required|min:9',
            'pais' => 'bail|required|min:1',
            'cidade' => 'bail|required|min:1',
            'descricao' => 'bail|nullable|max:100'
        ];
    }

    // Customizar o nome dos campos para as msgs de erro
    public function attributes()
    {
        return [
            'cnpj' => 'CNPJ',
            'pais' => 'país',
            'descricao' => 'descrição'
        ];
    }
}
