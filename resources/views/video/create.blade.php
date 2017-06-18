@extends('app')

@section('content')

    <h1>Post Something Stupid</h1>

    <hr/>
    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    @include('video/partials/form/_video');

    {!! Form::label('description','Describe the video') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}


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