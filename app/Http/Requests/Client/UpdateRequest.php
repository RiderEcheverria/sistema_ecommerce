<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'string|required|max:255',

            // 'ci'=>'string|required|unique:clients,name,'.$this->route('client')->id.' |min:8|max:8',
         
            // 'address'=>'string|required|max:255', 
            // 'phone'=>'string|required|unique:clients,phone,'.$this->route('client')->id.'|min:11|max:11',
            // 'email'=>'string|required|unique:clients,email,'.$this->route('client')->id.'|min:11|max:11|max:255|email:rfc,cs', 
           
        ];
    }

    public function messages()
    {
        return[
           
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 50 caracteres.',

            'ci.required'=>'Este campo es requerido.',
            'ci.string'=>'El valor no es correcto.',
            'ci.max'=>'Solo se permite 255 caracters.', 

            'address.required'=>'Este campo es requerido.',
            'address.string'=>'El valor no es correcto.',
            'address.max'=>'Solo se permite 255 caracters.',

            'email.required'=>'Este campo es requerido.',
            'email.string'=>'El valor no es correcto.',
            'email.max'=>'Solo se permite 255 caracters.',

           

            'phone.required'=>'Este campo es requerido.',
            'phone.string'=>'El valor no es correcto.',
            'phone.max'=>'Solo se permite 255 caracters.',
           
           
           
           
           
            // 'name.required'=>'Este campo es requerido.',
            // 'name.string'=>'El valor no es correcto.',
            // 'name.max'=>'Solo se permite 255 caracteres.',

            // 'ci.string'=>'El valor no es correcto.',
            // 'ci.required'=>'Este campo es requerido.',
            // 'ci.unique'=>'Este CI ya se encuentra registrado.',
            // 'ci.min'=>'Se requiere de 8 caracteres.',
            // 'ci.max'=>'Solo se permite 8 caracters.',




            // 'address.string'=>'El valor no es correcto.',
            // 'address.max'=>'Solo se permite 255 caracteres.',

            // 'phone.string'=>'El valor no es correcto.',
            // 'phone.unique'=>'El numero de phone ya se encuentra registrado.',
            // 'phone.min'=>'Se requiere de 9 caracteres.',
            // 'phone.max'=>'Solo se permite 9 caracters.',



        ];
    }
}
