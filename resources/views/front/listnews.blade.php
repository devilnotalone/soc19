@extends('layouts.news')
@section('content')
<div class='container'>
    <div class="section">
        <nav class="deep-orange lighten-1">
            <div class="nav-wrapper" style="margin-left: 3%;">
                <div class="col s12">
                    <a href="{{ url('/')}}" class="breadcrumb">หน้าหลัก</a>
                    <a href="{{ url('list_news/1')}}" class="breadcrumb">ข่าว</a>
                    <a href="#" class="breadcrumb">{{ $news_type->type}}</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col s12 m12 l8">
            @if ($news_type->id == 1)
            @forelse ($news_of_type as $news)
            <div class="col s12">
                <a href="{{ url("news/$news->id")}}">
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        @isset($news->image)
                        <img class="responsive-img" src="{{ Voyager::image($news->thumbnail('cropped','image'))}}">
                        @endisset
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p class="blue-grey-text text-darken-3">{{ str_limit($news->title,85) }}</p>
                        </div>
                        <div class="card-action">
                            @inject('getDate','App\Thaidate')
                            <span class="grey-text" style="font-size: 0.8em"><i
                                    class="tiny material-icons">date_range</i>{{
                                " ".$getDate->ThaiDate_Long(strtotime($news->created_at)) }}</span>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @empty
            <h5 class="center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
            @endforelse
            @else
            <div class="collection">
                @forelse ($news_of_type as $news)
                <a href="{{ url("news/$news->id")}}"
                    class="collection-item blue-grey-text text-darken-3">
                    <i class="material-icons orange-text" style="font-size: 1em;">add</i>
                    {{ str_limit($news->title,80) }}
                @inject('getDate','App\Thaidate')
                <em class="grey-text"
                    style="font-size: 0.8em">{{" ".$getDate->ThaiDate_Short(strtotime($news->created_at)) }}</em>
                </a>
                @empty
                    <h5 class="center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
            </div>
            @endif
             {{ $news_of_type->links('vendor.pagination.soc') }}
        </div>

        <div class="col s12 m12 l4">
            {{-- <ul class="collection with-header">
                <li href="#" class="collection-header deep-orange lighten-1 grey-text text-darken-4 right-align">
                    <h5>ข่าว{{ $news_type->type}}ล่าสุด</h5>
            </li>
            @foreach ($news_all as $newsall)
            <li class="collection-item hoverable">
                <a class="truncate grey-text text-darken-3" href="{{ url("news/$newsall->id")}}""><i class="
                    material-icons orange-text"
                    style="font-size: 1em;">add</i>{{ str_limit(" ".$newsall->title,90) }}</a>
            </li>
            @endforeach
            </ul> --}}
            <div class="card-panel">
                <h3 class="center-align"><i class="medium material-icons">
                        chat
                    </i> ประเภทข่าว</h3>
            </div>

            <div class="collection">
                @foreach ($news_type_all as $types)
                <a href="{{ url("list_news/$types->id")}}" class="collection-item orange-text text-darken-4">{{-- <span
                        class="badge">{{ $count->count_type}}</span> --}}{{ $types->type }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
