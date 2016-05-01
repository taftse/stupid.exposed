{!! Form::open(['action'=>'CommentController@store','id'=>'comment_form']) !!}
{!! Form::hidden('post_id',$post->id) !!}
{!! Form::hidden('parent_id','6') !!}
    <div class="form-group">
        {!! Form::textarea('comment',null,['id'=>'comment','class'=>'form-control','placeholder'=>'Submit a comment']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('save',['class'=>'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}

@section('scripts')
    @parent
    <script type='text/javascript'>

        /* attach a submit handler to the form */
        $("#comment_form").submit(function(event) {

            /* stop form from submitting normally */
            event.preventDefault();

            /* get some values from elements on the page: */
            var $form = $( this ),
                    url = $form.attr( 'action' );

            /* Send the data using post */
            var posting = $.post( url, {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                comment: $('#comment').val(),
                post_id: $( this ).find( 'input[name=post_id]' ).val(),
                parent_id: $( this ).find( 'input[name=parent_id]' ).val(),
                user_id: '1'} );

            /* Alerts the results */
            posting.done(function( data ) {
                alert(data);
            });
        });
    </script>
@stop

