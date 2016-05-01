<?php namespace SE\Http\Controllers;

use SE\Http\Requests;
use SE\Http\Controllers\Controller;

use Illuminate\Http\Request;
use SE\Http\Requests\CommentRequest;
use SKE\Comments\Models\Comment;
use SE\Post;

class CommentController extends Controller {

    /**
     * Store a newly created comment in storage.
     *
     * @return Response
     */
    public function store(CommentRequest $request)
    {
        $input = $request->all();

        $comment = new Comment();
        $comment->user_id = $request->input('user_id');
        $comment->body = $request->input('comment');



        // if the comment is a reply
        if (isset($input['parent_id']) && !empty($input['parent_id']) ) {
            $parent = Comment::findOrFail($input['parent_id']);
            
            $comment->save();
            $comment->makeChildOf($parent);
            return 'child success';
        }
        $id= $input['post_id'];
        $parent = Post::findOrFail($id);

        $parent->comments()->save($comment);
        return 'success';

    /*





        if(isset($input['parent_id'])){

            $parent = Comment::find($input['parent_id']);
            $comment->makeChildOf($parent);
            return 'child success';
        }






        //response()->json($response, $status);

        $article = Article::findOrFail($id);
        // Correct way to do it.
        // $article->comments()->create($request->all());
        $comment = new Comment;
        $comment->user_name = $request->input('user_name');
        $comment->body = $request->input('body');
        $article->comments()->save($comment);

        $comment = Comment::findOrFail($id);
        // Correct way to do it.
        // $newComment = Comment::create($request->all());
        $newComment = new Comment;
        $newComment->user_name = $request->input('user_name');
        $newComment->body = $request->input('body');
        $newComment->save();
        $newComment->makeChildOf($comment);
        */
    }
}
