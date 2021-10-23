<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
{
    //crear un request: php artisan make:request StoreCurso
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
            'sku' => 'required|min:4|not_regex:/[^0-9-]/',
            'nombre_producto' => 'required|max:60',
            'cantidad' => 'required|numeric|min:1',
            'precio' => 'required|numeric'
        ];
    }
    public function attributes(){
        return [
            //'nombre_producto' => 'nombre del producto'
        ];
    }
    public function messages(){
        return[
            'sku.required' => 'Este campo es requerido',
            'sku.min' => 'Mínimo 4 caracteres',
            'sku.not_regex' => 'Sólo se permiten números y guiones',
            'nombre_producto.required' => 'Este campo es requerido',
            'nombre_producto.max' => 'Máximo 60 caracteres',
            'cantidad.required' => 'Este campo es requerido',
            'cantidad.numeric' => 'Sólo se permiten números',
            'cantidad.min' => 'El valor mínimo debe ser 1',
            'precio.required' => 'Este campo es requerido',
            'precio.numeric' => 'Sólo se permiten números'
        ];
    }
}
