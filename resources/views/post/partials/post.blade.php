<section class="item">
    <header>
        <div class="user">
            <img src="http://www.placecage.com/200/200" class="user-profile" />
        </div>
        <div class="title">
            {{ $post->title }}
        </div>
    </header>
    <div class="content">
        @foreach($post->components as $component)
            @if($component->postable instanceof SE\Video )
                @include('video.partials._video')
            @elseif($component->postable instanceof SE\Image)
                @include('image.partials._image')
            @elseif($component->postable instanceof SE\Story)
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
            <li>
                <a href="#">
                    <i class="fa fa-heartbeat"></i>
                </a>
            </li>
        </ul>
        <ul class="meta">
            <li class="votes">
                3,141 votes total
            </li>
        </ul>
    </footer>
</section>