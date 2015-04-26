@extends('app')

@section('content')

    <h1>{{ $post->title }}</h1>

    @foreach($post->components as $component)
        @if($component->postable instanceof SE\Video )
            @include('video/partials/_video')
        @elseif($component->postable instanceof SE\Image)

        @elseif($component->postable instanceof SE\Story)

        @endif
    @endforeach
@endsection()