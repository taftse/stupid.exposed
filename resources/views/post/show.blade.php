@extends('app')

@section('content')
    <div class="container">
        @include('post.partials.post', ['post' => $post])
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
        @include('comment.partials.show',['comments' =>$post->comments])

    </div>

@endsection()