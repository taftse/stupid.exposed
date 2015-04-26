@extends('app')

@section('content')
    @foreach($posts as $post)

        {!! link_to_route('post', $post->title, $post->slug) !!}
    <br/>

    @endforeach
@endsection()