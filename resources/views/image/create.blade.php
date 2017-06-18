@extends('app')

@section('content')

    <h1>Post Something Stupid</h1>

    <hr/>
    {!! Form::open(['files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('uploaded_image','upload an image stupid') !!}
        {!! Form::file('uploaded_image',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image_url','link to an image stupid') !!}
        {!! Form::text('image_url',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Something Stupid!',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}


@endsection()


@if($errors->has())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif