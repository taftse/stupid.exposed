<section class="comments">
    <header>
        @include('comment.partials.create')
    </header>
    <div class="content">
        @if(!empty($comments))
            @include('comment.partials._comments',['comments',$comments])
        @endif
    </div>
</section>

