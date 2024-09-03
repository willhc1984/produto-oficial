<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required',
            'descricao' => 'required',
            'foto' => 'required',
            'link' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'Titulo do produto é obrigatório!',
            'descricao.required' => 'Descrição é obrigatório!',
            'foto.required' => 'Imagem é obrigatória!',
            'link.required' => 'Link é obrigatório!'
        ];
    }
}
