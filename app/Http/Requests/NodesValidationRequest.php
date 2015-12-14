<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NodesValidationRequest extends Request {

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
		    'name_node' => 'required',
		    'title' => 'required',
		    'description' => 'required',		    	   
		  ];
	}

	public function messages()
	{
	    return [
	        'name_node.required' => 'Debes ingresar el nombre que tendra el nodo dentro del sistema',	        
	        'title.required' => 'Debes ingresar el título que tendra el nodo en la página',	               
	        'description.required' => 'Debes ingresar el contenido del nodo',	                
	    ];
	}

}
