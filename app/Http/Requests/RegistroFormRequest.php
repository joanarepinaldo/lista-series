<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroFormRequest extends FormRequest
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
            'email' => 'email:rfc,dns',
            'name' => 'required|min:5',
            'password' =>'required|min:6'
            
        ];
    }

    public function messages()
    {
        return [
            'email' => 'O E-mail precisa ser válido',
            'name.min' => 'O campo nome precisa ter pelo menos 5 caracteres',
            'password.min' => 'A senha precisa ter pelo menos 6 caracteres'
            
            
        ];
    }
}