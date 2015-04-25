@extends('app')

@section('content')

    <h1>Post Something Stupid</h1>

    <hr/>
    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('title','Title') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>


    @import('post/partial/form/_video');
    @import('post/partial/form/_image');
    @import('post/partial/form/_story');


    <div class="form-group">
        {!! Form::submit('Add Something Stupid!',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}


@endsection()