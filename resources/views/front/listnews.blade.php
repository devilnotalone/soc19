@extends('layouts.news')
@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/')}}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('list_news/1')}}">ข่าว</a></li>
                    <li class="breadcrumb-item active">{{ $news_type->type }}</li>
                </ol>
            </nav>
            @if ($news_type->id == 1)
            @forelse ($news_of_type as $news)
            <!--Grid row-->
            <div class="row mt-1">
                <!--Grid column-->
                <div class="col-lg-5 col-xl-4 mb-2">
                    <!--Featured image-->
                    @isset($news->image)
                    <a href="{{ url("news/$news->id")}}" target="_self">
                        <img src="{{ Voyager::image($news->thumbnail('cropped','image'))}}"
                            class="img-fluid rounded shadow-sm" alt="">
                    </a>
                    @endisset
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-7 col-xl-7 ml-xl-4">
                    <h5 class="mb-1">
                        <a class="text-justify" href=" {{ url("news/$news->id")}}">{{ str_limit($news->title,85) }}</a>
                    </h5>
                    <p class="text-dark text-justify">{{ str_limit($news->body,200) }}@inject('getDate','App\Thaidate')
                       <small> <i class="far fa-calendar-alt text-muted"></i><em
                            class="text-muted">{{" ".$getDate->ThaiDate_Long(strtotime($news->created_at)) }}</em></small>
                    </p>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

            <hr class="mb-3">
            @empty
            <h5 class="text-center center text-muted">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
            @endforelse
            @else
            <div class="list-group list-group-flush">
                @forelse ($news_of_type as $news)
                <a href="{{ url("news/$news->id")}}" class="list-group-item list-group-item-action">
                    <i class="fas fa-angle-right text-primary"></i>{{ " ".str_limit($news->title,90)}}
                    @inject('getDate','App\Thaidate')
                    <small><i class="far fa-calendar-alt text-muted"></i><em
                        class="text-muted">{{" ".$getDate->ThaiDate_Short(strtotime($news->created_at)) }}</em></small>
                </a>
                @empty
                <h5 class="text-center text-muted">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
            </div>
            @endif
            {{ $news_of_type->links('vendor.pagination.soc') }}
        </div>
        <div class="col-md-3">
            <div class="card bg-primary">
                <div class="card-header">
                    <h5 class="text-right text-white">ประเภทข่าว</h5>
                </div>
                <div class="list-group list-group-flush">
                    @foreach ($news_type_all as $types)
                    <a href="{{ url("list_news/$types->id")}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{ " ข่าว".$types->type }}</a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
