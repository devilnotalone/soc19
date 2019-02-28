<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @php
        $i=0;
        @endphp
        @foreach ($slides as $slide)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($loop->first) class="active">@endif</li>
        @php
        $i++
        @endphp
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($slides as $slide)
        <div class="carousel-item @if($loop->first) active @endif">
            <img class="d-block w-100" target="_blank" src="{{ Voyager::image($slide->image)}}" alt="{{ $slide->title }}">
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


@php
$i=0;
@endphp
<div class="carousel">
    @foreach ($slides as $slide)
    <div class="item-{{$i}}">
        <img target="_blank" src="{{ Voyager::image($slide->image)}}" alt="{{ $slide->title }}">
    </div>
    @php
    $i++
    @endphp
    @endforeach
</div>
