<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
            $id = $this->id ?? '';
        $rules = [
            'codigocliente' => 'required|string|min:0|max:6',"unique:cliente,codigocliente,id,{$id},id",

            'nome' => 'required|string|min:3|max:20',
            'pessoa'=> 'required','J','F','O', 
            'cnpj' => 'nullable',    
            'estado' => 'required',
            'data_nascimento' => 'required',

        ];

        if ($this->method('PUT')){
            $rules['data_nascimento']=[
                'required',
            ];
        }

        return $rules;
    }


    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
          'codigocliente' => 'CODIGO REQUER: Somente Letras de 0 a 6 digitos',
          'nome' => 'Nome Requer Min 3 e Max 20 Caracteres',
         'pessoa' => 'Escolha Pessoa F J ou O',
         'estado' => 'informe o estado ex: sp,sc',
         'data_nascimento' => 'Preencha a data de nascimento',
    ];
}
}


