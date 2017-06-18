@extends('app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            @include('post.partials.post', ['post' => $post])
        @endforeach
    </div>
@endsection()