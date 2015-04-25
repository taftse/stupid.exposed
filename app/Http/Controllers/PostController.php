<?php namespace SE\Http\Controllers;

use SE\Http\Requests;
use SE\Http\Controllers\Controller;

use SE\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostController extends Controller {

	/**
	 * Display a listing of the posts.
	 *
	 * @return Response
	 */
	public function index($type = null)
	{

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
	public function store()
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $uid
	 * @return Response
	 */
	public function show($slug)
	{
        $post = Post::where('slug', '=', $slug)->with('tags','comments')->firstOrFail();

        return view('post.show',compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($uid)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($uid)
	{
		//
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
