<?php namespace SE\Http\Requests;

use SE\Http\Requests\Request;

class CreateVideoPostRequest extends Request {

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
            'title'    => 'required',
            'url'           => 'required',
            //'description'   => 'required',

		];
	}

}
