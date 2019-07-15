@extends('layouts.gallery')
@section('content')
@inject('getRes','App\Gallery')
@foreach ($gallery as $gal)
<section class=" bg-transparent py-5 parallax4">
    <div class="container">
        <h1 class="text-dark text-center">{{ $gal->title }}</h1>
        @isset($gal->detail)
        <p class="lead text-dark text-justify">{!! $gal->detail !!}</p>
        @endisset
        @inject('getDate','App\Thaidate')
        <hr class="divider my-0">
        <em class="card-text"> <i class="far fa-calendar-alt text-muted"></i><small
                class="text-muted">{{ " ".$getDate->ThaiDate_Long(strtotime($gal->created_at)) }}</small>
        </em>
    </div>
</section>
<div class="album bg-light">
    <div class="container">
        <div class="row justify-content-center">
                @php $images = json_decode($gal->gallery); @endphp
                @foreach ($images as $image)
                <div class="col-md-4 p-3">
                    <a href="{{ Voyager::image($image)}}" data-toggle="lightbox" data-gallery="example-gallery">
                    <img class="img-fluid rounded shadow"
                        src="{{ Voyager::image($getRes->getThumbnail($image,'cropped')) }}" />
                    </a>
                </div>
                @endforeach
        </div>
        @isset($gal->link)
        <hr>
        <div class="alert alert-info" role="alert">
        ภาพกิจกรรมเพิ่มเติม <a href="{{ $gal->link}}" target="_blank" class="alert-link"><i
                class="fab fa-facebook"></i> สำนักวิชาสังคมศาสตร์ "{{ $gal->title }}"</a>
        </div>
        @endisset
    </div>
</div>
@endforeach
@endsection
