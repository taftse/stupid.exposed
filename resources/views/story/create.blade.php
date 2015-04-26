@extends('app')

@section('content')

<h1>Post Something Stupid</h1>

<hr/>
{!! Form::open() !!}
<div class="form-group">
    {!! Form::label('title','Title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('story','Your tale of stupidity') !!}
    {!! Form::textarea('story',null,['class'=>'form-control']) !!}
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