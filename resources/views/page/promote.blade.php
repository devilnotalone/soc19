@extends('layouts.page')
@section('content')
<div class="container">
    <div class="row">
        <div class="card shadow-sm p-2 my-4">
            @isset($page->image)
            <img src="{{ Voyager::image($page->image)}}" class="card-img-top">
            @endisset
            <div class="card-body">
                <h5 class="card-title text-primary">{{ $page->title}}</h5>
                <hr class="divider my-0">
                <p class="card-text">{!! $page->body !!}</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
