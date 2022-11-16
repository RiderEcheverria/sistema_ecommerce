<?php

namespace App\Http\Requests\Provider;

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
        // 'name', 'address','email','ruc_numbre','phone',
        return [
            'name'=>'required|string|max:50',
            'address'=>'nullable|string|max:250',
            'email'=>'nullable|string|max:250',
            'nit'=>'nullable|string|max:250',
            'celular'=>'nullable|string|max:250',
                      
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 50 caracteres.',
            'address.required'=>'Este campo es requerido.',
            'address.string'=>'El valor no es correcto.',
            'address.max'=>'Solo se permite 255 caracters.',
            'email.required'=>'Este campo es requerido.',
            'email.string'=>'El valor no es correcto.',
            'email.max'=>'Solo se permite 255 caracters.',
            'nit.required'=>'Este campo es requerido.',
            'nit.string'=>'El valor no es correcto.',
            'nit.max'=>'Solo se permite 255 caracters.',
            'celular.required'=>'Este campo es requerido.',
            'celular.string'=>'El valor no es correcto.',
            'celular.max'=>'Solo se permite 255 caracters.',

            // 'ruc_numbre.required'=>'Este campo es requerido.',
            // 'ruc_numbre.string'=>'El valor no es correcto.',
            // 'ruc_numbre.max'=>'Solo se permite 50 caracteres.',

            // 'phone.required'=>'Este campo es requerido.',
            // 'phone.string'=>'El valor no es correcto.',
            // 'phone.max'=>'Solo se permite 50 caracteres.',



         
        ];
    }




//     public function rules()
//     {
//         return [
       
//             'name'=>'reqired|string|max:255',

//             'email'=>'reqired|email|string|max:255|unique:providers,email,'.
//             $this->route('provider')->id.'|max:255',

//             'ruc_number'=>'reqired|string|max:|max:11|min:11|unique:providers,ruc_number,'.
//             $this->route('provider')->id.'|max:11',


//             'address'=>'nullable|string|max:255',

//             'phone'=>'reqired|string|max:9|min:9|unique:providers,phone,'.
//             $this->route('provider')->id.'|max:9',
     
//     ];
// }
// public function messages()
// {
//     return[
//         'name.required'=>'Este campo es requerido.',
//         'name.string'=>'El valor no es correcto.',
//         'name.max'=>'Solo se permite 255 caracteres.',

//         'email.required'=>'Este campo es requerido.',
//         'email.email'=>'No es correcto elcorreo electronico.',
//         'email.string'=>'El valor no es correcto.',
//         'email.max'=>'Solo se permite 255 caracters.',
//         'email.unique'=>'Ya se encuentra regitrado.',

//         'ruc_number.required'=>'Este campo es requerido.',
//         'ruc_number.string'=>'El valor no es correcto.',
//         'ruc_number.max'=>'Solo se permite 11 caracters.',
//         'ruc_number.min'=>'Solo se permite 11 caracters.',
//         'ruc_number.unique'=>'Ya se encuentra regitrado.',

        
//         'address.max'=>'Solo se permite 255 caracters.',
//         'address.string'=>'El valor no es correcto.',

//         'phone.required'=>'Este campo es requerido.',
//         'phone.string'=>'El valor no es correcto.',
//         'phone.max'=>'Solo se permite 9 caracters.',
//         'phone.min'=>'Solo se permite 9 caracters.',
//         'phone.unique'=>'Ya se encuentra regitrado.',

//     ];
// }
}

