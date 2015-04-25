@extends('app')

@section('content')

    <h1>Post Something Stupid</h1>

    <hr/>
    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>


    @include('post/partials/form/_video');
    @include('post/partials/form/_image');
    @include('post/partials/form/_story');


    <div class="form-group">
        {!! Form::submit('Add Something Stupid!',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}


@endsection()