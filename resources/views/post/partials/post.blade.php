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
    <footer>
        <ul class="interaction">
            <li>
                <a href="#">
                    <i class="fa fa-arrow-up"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-arrow-down"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-share"></i>
                </a>
            </li>
            <li class="align-right">
                <se-rating value="{{round($post->ratings['average'],0,PHP_ROUND_HALF_DOWN)}}"></se-rating>
                <!-- <select id="Stupidity-rating" >
                     <option value="1">Not stupid</option>
                     <option value="2">Getting Warmer</option>
                     <option value="3">Stupid</option>
                     <option value="4">Really Stupid</option>
                     <option value="5">WTF were you thinking!</option>
                 </select>
                <!--<a href="#">
                     <i class="fa fa-heartbeat"></i>
                 </a>-->
            </li>
        </ul>
        <ul class="meta">
            <li class="votes">
                {{$post->ratings['total_votes']}} votes total
            </li>
        </ul>
    </footer>
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