@extends('layouts.news')
@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="deep-orange-text" href="{{ url('/')}}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a class="deep-orange-text" href="{{ url('list_news/1')}}">ข่าว</a></li>
                    <li class="breadcrumb-item active">{{ $news_type->type }}</li>
                </ol>
            </nav>
            @if ($news_type->id == 1)
            @forelse ($news_of_type as $news)
            <!--Grid row-->
            <div class="row mt-1 wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-5 col-xl-4 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        @isset($news->image)
                        <img src="{{ Voyager::image($news->thumbnail('cropped','image'))}}"
                            class="img-fluid" alt="">
                            @endisset
                        <a href="{{ url("news/$news->id")}}"
                            target="_self">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-1">
                    <h5 class="mb-1">
                        <a class="dark-grey-text" href=" {{ url("news/$news->id")}}">{{ str_limit($news->title,85) }}</a>
                    </h5>
                    <p class="grey-text text-justify">{{ str_limit($news->body,200) }}@inject('getDate','App\Thaidate')
                    {{" "}}<i class="far fa-calendar-alt"></i><em
                            class="deep-orange-text">{{" ".$getDate->ThaiDate_Long(strtotime($news->created_at)) }}</em>
                    </p>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->

            <hr class="mb-3">
            @empty
            <h5 class="center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
            @endforelse
            @else
            <div class="list-group list-group-flush">
                @forelse ($news_of_type as $news)
                <a href="{{ url("news/$news->id")}}" class="list-group-item list-group-item-action">
                    <i class="fas fa-angle-right orange-text"></i>{{ " ".str_limit($news->title,90)}}
                    @inject('getDate','App\Thaidate')
                    <em class="grey-text">{{" ".$getDate->ThaiDate_Short(strtotime($news->created_at)) }}</em>
                </a>
                @empty
                <h5 class="text-center grey-text">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
            </div>
            @endif
            {{ $news_of_type->links('vendor.pagination.soc') }}
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header gradient-card-header peach-gradient">
                    <h5 class="text-right">ประเภทข่าว</h5>
                </div>
                <div class="list-group list-group-flush">
                    @foreach ($news_type_all as $types)
                    <a href="{{ url("list_news/$types->id")}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{ " ข่าว".$types->type }}</a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
