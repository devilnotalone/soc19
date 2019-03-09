<div class="carousel carousel-slider">
    @foreach ($slides as $slide)
    <a class="carousel-item" href="{{ $slide->link }}"><img src="{{ Voyager::image($slide->image)}}"></a>
    @endforeach
</div>
