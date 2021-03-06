<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegistrarAsignaturaRequest extends Request {

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
			'nombre' => 'required|min:3',
		];
	}


public function messages(){
        return [
           'nombre.required' => 'Debe ingresar el nombre de la asignatura',
           'nombre.min' => 'El nombre no puede tener menos de 3 caracteres',
          ];
          
    }
}