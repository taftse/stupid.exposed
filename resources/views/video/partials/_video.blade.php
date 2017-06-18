@if($component->postable->host =='youtube')
    @include('video/partials/_youtube')
@elseif($component->postable->host =='vimeo')
    @include('video/partials/_vimeo')
@endif