<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class AdministradoresRequest extends FormRequest
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
            'documento'       => 'required | string',
            'nombres'          => 'required | string | max:30',
            'apellidos'        => 'required | string | max:30',
            'telefono'         => 'required | string | max:12',
            'correo'           => 'required | string | max:100',
            'fechaNac'         => 'required | date',
            'nameUser'          => 'required | string',
            'password'         => 'required | string',
        ];
    }
}