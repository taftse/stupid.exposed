@extends('app')

@section('content')
    @foreach($posts as $post)
        {{ $posts->title }}
    @endforeach
@endsection()