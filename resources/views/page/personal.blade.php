@extends('layouts.page')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12 col-sm-12 col-lg-9 mb-3">
            <!-- Header -->
            <header class="bg-primary text-center py-4 mb-4">
                <div class="container">
                <h2 class="font-weight-light text-white">บุคลากรสาขาวิชา{{ $getPs1->major_name }}</h2>
                </div>
            </header>
            <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($getPs1->picture)
                        <img src="{{ Voyager::image($getPs1->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($getPs1->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $getPs1->academic_name.$getPs1->name." ".$getPs1->surname}}</h6>
                            <div class="card-text text-primary">{!! $getPs1->position_name."สาขาวิชา<br>".$getPs1->major_name
                                !!}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                        @foreach ($getPs2 as $ps2)
                        <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                            <div class="card border-0 shadow-sm">
                                @isset($ps2->picture)
                                <img src="{{ Voyager::image($ps2->picture)}}"
                                    class="card-img-top" alt="...">
                                @endisset
                                @empty($ps2->picture)
                                <i class="fas fa-user fa-10x text-center text-muted"></i>
                                @endempty
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-0 text-black">
                                        {{ $ps2->academic_name.$ps2->name." ".$ps2->surname}}
                                    </h6>
                                    <div class="card-text text-primary">อาจารย์</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <hr class="divider m-2 bg-primary">
                    <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                        <div class="card border-0 shadow-sm">
                            @isset($getPs3->picture)
                            <img src="{{ Voyager::image($getPs3->picture)}}" class="card-img-top"
                                alt="...">
                            @endisset
                            @empty($getPs3->picture)
                            <i class="fas fa-user fa-10x text-center text-muted"></i>
                            @endempty
                            <div class="card-body text-center">
                                <h6 class="card-title mb-0 text-black">
                                    {{ $getPs3->academic_name.$getPs3->name." ".$getPs3->surname}}
                                </h6>
                                <div class="card-text text-primary">เลขานุการ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-3">
            @include('page.admenu')
        </div>
    </div>
</div>
@endsection
