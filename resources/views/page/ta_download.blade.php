@extends('layouts.news')
@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-primary" href="{{ url('/')}}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a class="text-primary"
                            href="{{ url('ta_download/1')}}">บริการข้อมูล</a></li>
                    <li class="breadcrumb-item active">{{ $TypeDoc->type_doc }}</li>
                </ol>
            </nav>
          {{--   <!--Navbar-->
            <nav class="navbar navbar-dark warning-color-dark">
                <form class="form-inline my-2 my-lg-0 ml-auto" action="/ta_download/" method="get">
                    <input class="form-control" type="search" placeholder="ค้นหา" aria-label="Search">
                    <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">ค้นหา</button>
                </form>
            </nav>
            <!--/.Navbar--> --}}
            <div class="list-group list-group-flush">
                @forelse ($ListDoc as $List)
                @foreach(json_decode($List->file) as $file)
                <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                    class="list-group-item list-group-item-action" target="_blank">
                    <i class="fas fa-angle-right orange-text"></i>{{ " ".$List->title }}
                </a>
                @endforeach
               {{--  <a class="btn btn-info btn-lg btn-block"
                    href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                    target="_blank">
                    {{ $file->original_name ?: '' }}
                </a> --}}
                @empty
                <h5 class="text-center grey-text">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
            </div>
            {{ $ListDoc->links('vendor.pagination.soc') }}
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="list-group list-group-flush">
                    <a href="{{ url("ta_download/1")}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}บริการข้อมูลอาจารย์</a>

                    <a href="{{ url("st_download/1")}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}บริการข้อมูลนักศึกษา</a>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header gradient-card-header peach-gradient">
                    <h5 class="text-right">บริการข้อมูลอาจารย์</h5>
                </div>
                <div class="list-group list-group-flush">
                    @foreach ($ListTypeDoc as $Types)
                    <a href="{{ url("ta_download/$Types->id")}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" ".$Types->type_doc}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
