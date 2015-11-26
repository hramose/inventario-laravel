<?php

namespace Inventario\Http\Requests;

use Inventario\Http\Requests\Request;

class CreateUserRequest extends Request
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
          'name' 		 => 'required',
          'email' 	 => 'required|unique:users',
          'carnet' 	 => 'required',
          'password' => 'required|confirmed',
          'rol' 		 => 'required'
        ];
    }
}
