<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class SaveClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (@Auth::user()->hasRole('administrador') || @Auth::user()->hasRole('vendedor')) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'documento' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'documento.required' => 'El documento es obligatorio',
            'correo.required' => 'El correo es obligatorio',
            'direccion.required' => 'La direccion es obligatoria',
        ];
    }
}
