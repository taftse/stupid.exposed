<?php
/**
 * Created by PhpStorm.
 * User: Timothy
 * Date: 18/06/2017
 * Time: 18:05
 */

namespace SKE\Comments\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest {

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
            'post_id' => 'required',
            'user_id' =>'required',
            'comment' =>'required',
        ];
    }

}