@extends('app')

@section('content')
    $post_data = unserialize($post->post_data);
var_dump($post_data);
    @if($post_data  ==='youtube)
        @include('posts/partials/_youtube')
    @elseif($post_data  ==='vimeo')
        @include('posts/partials/vimeo')
    @endif
@endsection()