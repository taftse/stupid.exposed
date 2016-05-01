@extends('app')

@section('content')
    <div class="container">
    @include('post.partials.post', ['post' => $post])
    @include('comment.partials.show',['comments' =>$post->comments])

    </div>

@endsection()