<?php

namespace App\Http\Requests\Product;

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
           
            // 'name'=>'string|required|max:255',
            
            
            // 'category_id'=>'integer|required', //categoria
            // 'provider_id'=>'integer|required', //proveedor
           
        ];
    }
    public function messages()
    {
        return [
            
            // 'name.string' => 'El valor no es correcto.',
            // 'name.required' => 'Este campo es requerido.',
            // 'name.unique' => 'El procucto ya esta registrado.',
            // 'name.max' => 'Solo se permite 255 caracteres.',

          

            // 'sell_price.required'=>'Este campo es requerido.',

            // 'category_id.integer'=>'El valor tiene que ser entero.',
            // 'category_id.required'=>'El campo es requerido.',
          

            // 'provider_id.integer'=>'El valor tiene que ser entero.',
            // 'provider_id.required'=>'El campo es requerido.',




        
           
        ];
    }
}