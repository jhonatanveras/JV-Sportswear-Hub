<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
     return [
         'name' => 'required',
         'description' => 'required',
         'price' => 'required|numeric',
     ];
    }

    public function messages()
    {
        return[
            'name.required' => 'O campo nome é obrigatório.',
            'description.required' => 'O campo descrição e obrigatório.',
            'price.required' => 'O campo preço é obrigatório.',
            'price.numeric' => 'O valor do campo preço deve ser numérico',
        ];
    }
}
