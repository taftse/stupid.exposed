<?php namespace SE\Http\Controllers;

use SE\Component;
use SE\Http\Requests;
use SE\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SE\Post;
use SE\Story;
use SE\Http\Requests\CreateStoryPostRequest;

class StoryController extends Controller {

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
        return view('story.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateStoryPostRequest $request)
    {

        $storyInput = $request->only('story');
        $storyInput['user_id'] = 1;


        $story = Story::create($storyInput);

        $component = new Component();
        $story->components()->save($component);


        $postInput = $request->only('title');
        $postInput['user_id'] = 1;
        $postInput['category_id'] = 1;

        $post = Post::create($postInput);
        $post->components()->save($component);


        return redirect()->route('post',$post->slug)->with('message','Stupidity Detected');

    }

}
