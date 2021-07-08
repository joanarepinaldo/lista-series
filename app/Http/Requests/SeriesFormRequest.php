<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            'nome' => 'required|min:2',
            'qtd_temporadas'=>'required|min:1|gte:1',
            'ep_por_temporada'=>'required|min:1|gte:1'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo nome precisa ter pelo menos 2 caracteres',
            'qtd_temporadas.gte' => 'O campo :attribute precisa ser maior que zero',
            'ep_por_temporada.gte' => 'O campo :attribute precisa ser maior que zero'
        ];
    }
}
