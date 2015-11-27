<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class EditProductRequest extends Request
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
          'nombre'          => 'required',
          'modelo'          => 'required',
          'serie'           => 'required',
          //'descripcion'     => 'required',
          'cantidad'        => 'required',
          'tipo'            => 'required',
          'categories_id'   => 'required',
          'brand_id'        => 'required'
        ];
    }
}
