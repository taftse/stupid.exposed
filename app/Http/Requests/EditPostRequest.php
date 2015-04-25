<?php namespace SE\Http\Requests;

use Illuminate\Support\Facades\Auth;
use SE\Http\Requests\Request;
use SE\Post;

class EditPostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
        $postId = $this->route('slug');
        return Post::where('id', $postId)
            ->where('user_id', Auth::id())->exists();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title' =>'required',
		];
	}

}
