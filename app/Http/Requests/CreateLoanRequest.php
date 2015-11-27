<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class CreateLoanRequest extends Request
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
            'cantidad'        => 'required',
            'descripcion'     => 'required',
            'inicio_prestamo' => 'required|date_format:d/m/Y',
            //'fin_prestamo'    => 'required|date_format:d/m/Y',
            'products_id'     => 'required'

        ];
    }
}
