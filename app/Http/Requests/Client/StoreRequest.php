<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'ci'=>'nullable|string|max:250',

            'address'=>'nullable|string|max:250',
            'phone'=>'nullable|string|max:250',
            'email'=>'nullable|string|max:250',
          


            // 'name'=>'string|required|max:255',
            // 'ci'=>'string|required|unique:clients|max:8',
          
            // 'adddress'=>'string|required|max:255', 
            // 'phone'=>'string|required|unique:clients|min:8|max:8',
            // 'phone'=>'string|required|unique:clients|max:255, 
           
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'ci.string'=>'El valor no es correcto.',
            'ci.required'=>'Este campo es requerido.',
            'ci.unique'=>'Este CI ya se encuentra registrado.',
            'ci.min'=>'Se requiere de 8 caracteres.',
            'ci.max'=>'Solo se permite 8 caracters.',



            'address.string'=>'El valor no es correcto.',
            'address.max'=>'Solo se permite 255 caracteres.',

            'phone.string'=>'El valor no es correcto.',
            'phone.unique'=>'El numero de celular ya se encuentra registrado.',
            'phone.min'=>'Se requiere de 8 caracteres.',
            'phone.max'=>'Solo se permite 8 caracters.',



        ];
    }
}

     
     