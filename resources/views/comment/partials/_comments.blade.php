@foreach($comments as $comment)

    @if(is_null($comment->parent_id))

        @include('comment.partials._comment',['comment'=>$comment])
        @if($comment->hasChildren())

            @include('comment.partials._child_comments',['comments'=> $comment->children,'parent_id' => $comment->id])
        @endif
    @endif

@endforeach
