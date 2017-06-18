<section class="item">
    <header>
        <div class="user">
            <img src="http://www.placecage.com/200/200" class="user-profile" />
        </div>
        <div class="title">
            <li><a href="{{ url('/post/'.$post->slug ) }}">{{ $post->title }}</a></li>

        </div>
    </header>
    <div class="content">
        @foreach($post->components as $component)
            @if($component->postable instanceof SKE\Posts\Models\Video )
                @include('video.partials._video')
            @elseif($component->postable instanceof SKE\Posts\Models\Image)
                @include('image.partials._image')
            @elseif($component->postable instanceof SKE\Posts\Models\Story)
                @include('story.partials._story')
            @endif
        @endforeach
    </div>

</section>
@include('ratings.ratings')


@section('scripts')
    @parent

    <!--<script type="text/javascript">

        $('#Stupidity-rating').barrating({
            theme: 'bars-movie',
            initialRating:'',
        });

    </script>-->
@stop