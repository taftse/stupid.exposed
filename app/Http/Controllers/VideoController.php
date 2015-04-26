<?php namespace SE\Http\Controllers;

use SE\Component;
use SE\Http\Requests;
use SE\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SE\Http\Requests\CreateVideoPostRequest;
use SE\Post;
use SE\Video;


class VideoController extends Controller {


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('video.create');
    }

	/**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store(CreateVideoPostRequest $request)
    {

        $videoInput = $request->only('url','description');
        $videoInput['user_id'] = 1;
        $videoInput['host'] = 'youtube';

        $video = Video::create($videoInput);

        $component = new Component();
        $video->components()->save($component);


        $postInput = $request->only('title');
        $postInput['user_id'] = 1;
        $postInput['category_id'] = 1;

        $post = Post::create($postInput);
        $post->components()->save($component);


        return redirect()->route('post',$post->slug)->with('message','Stupidity Detected');

    }

}
