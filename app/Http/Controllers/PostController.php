<?php namespace SE\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\ResponseTrait;
use Illuminate\Support\Facades\App;
use SE\Http\Requests;
use SE\Http\Controllers\Controller;

use SE\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use SE\Http\Requests\CreatePostRequest;
use SE\Http\Requests\EditPostRequest;

class PostController extends Controller {


    public function __construct()
    {

    }
	/**
	 * Display a listing of the posts.
	 *
	 * @return Response
	 */
	public function index($type = null)
	{
       // $posts = Post::all()->with('components')->get();
        return view('post.index',compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePostRequest $request)
	{
        $input = $request->all();

        $post = Post::create($input);


        return redirect()->route('post',$post->slug)->with('message','Stupidity Detected');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{

        $post = Post::where('slug', '=', $slug)->with('tags','comments')->first();

        if($post == false)
        {
            return redirect()->route('posts');
        }


        return view('post.show',compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
        $post = Post::where('slug', '=', $slug)->with('tags')->firstOrFail();

        return view('post.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditPostRequest $request, $uid)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($uid)
	{
		//
	}

}
