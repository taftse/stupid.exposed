<?php namespace SKE\Posts\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use SKE\Posts\Models\Post;
use SKE\Posts\Requests\EditPostRequest;


class PostController extends Controller
{


    /**
     * Display a listing of the posts.
     *
     * @return Response
     */
    public function index($type = null)
    {
        $posts = Post::where('id','!=','0')->orderBy('rating', 'desc')->with('components')->get();
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
    public function store(Request $request)
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

        $post = Post::where('slug', '=', $slug)->with('components','comments','ratings')->first();

        if($post == false)
        {
            return redirect()->route('posts');
        }

        $post['comments']->toHierarchy();
        $ratings['total_votes'] = count($post->ratings);
        $ratings['average'] = $post->averageRating();
        $post['ratings'] = $ratings;


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

        return view('post.edit',compact('post'));
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