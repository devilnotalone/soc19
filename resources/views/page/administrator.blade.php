@extends('layouts.page')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12 col-sm-12 col-lg-9 mb-3">
            <!-- Header -->
            <header class="bg-primary text-center py-4 mb-4">
                <div class="container">
                    <h2 class="font-weight-light text-white">คณะกรรมการบริหารสำนักวิชาสังคมศาสตร์</h2>
                </div>
            </header>
            <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($getAd1->picture)
                        <img src="{{ Voyager::image($getAd1->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($getAd1->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $getAd1->academic_name.$getAd1->name." ".$getAd1->surname}}</h6>
                            <div class="card-text text-primary">{{ $getAd1->position_name."สำนักวิชาสังคมศาสตร์"}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                        @foreach ($getAd2 as $ad2)
                        <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                            <div class="card border-0 shadow-sm">
                                @isset($ad2->picture)
                                <img src="{{ Voyager::image($ad2->picture)}}"
                                    class="card-img-top" alt="...">
                                @endisset
                                @empty($ad2->picture)
                                <i class="fas fa-user fa-10x text-center text-muted"></i>
                                @endempty
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-0 text-black">
                                        {{ $ad2->academic_name.$ad2->name." ".$ad2->surname}}</h6>
                                    <div class="card-text text-primary">{{ $ad2->position_name}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <hr class="divider m-2 bg-primary">
                    <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                        @foreach ($getAd3 as $ad3)
                        <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                            <div class="card border-0 shadow-sm">
                                @isset($ad3->picture)
                                <img src="{{ Voyager::image($ad3->picture)}}"
                                    class="card-img-top" alt="...">
                                @endisset
                                @empty($ad3->picture)
                                <i class="fas fa-user fa-10x text-center text-muted"></i>
                                @endempty
                                <div class="card-body text-center">
                                    <h6 class="card-title mb-0 text-black">
                                        {{ $ad3->academic_name.$ad3->name." ".$ad3->surname}}</h6>
                                    <div class="card-text text-primary">{{ $ad3->position_name}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr class="divider m-2 bg-primary">
            <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($getAd4->picture)
                        <img src="{{ Voyager::image($getAd4->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($getAd4->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $getAd4->academic_name.$getAd4->name." ".$getAd4->surname}}</h6>
                            <div class="card-text text-primary">{{ $getAd4->position_name}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($getAd5->picture)
                        <img src="{{ Voyager::image($getAd5->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($getAd5->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $getAd5->academic_name.$getAd5->name." ".$getAd5->surname}}</h6>
                            <div class="card-text text-primary">{{ $getAd5->position_name}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($getAd6->picture)
                        <img src="{{ Voyager::image($getAd6->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($getAd6->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $getAd6->academic_name.$getAd6->name." ".$getAd6->surname}}</h6>
                            <div class="card-text text-primary">{{ $getAd6->position_name}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($getAd7->picture)
                        <img src="{{ Voyager::image($getAd7->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($getAd7->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $getAd7->academic_name.$getAd7->name." ".$getAd7->surname}}</h6>
                            <div class="card-text text-primary">{{ $getAd7->position_name}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="divider m-2 bg-primary">
            <div class="d-flex flex-md-row flex-sm-column mb-2 flex-wrap align-items-start">
                @foreach ($getAd8 as $ad8)
                <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                    <div class="card border-0 shadow">
                        @isset($ad8->picture)
                        <img src="{{ Voyager::image($ad8->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($ad8->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $ad8->academic_name.$ad8->name." ".$ad8->surname}}</h6>
                            <div class="card-text text-primary">{!! $ad8->position_name."สาขาวิชา<br>".$ad8->major_name
                                !!}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-3">
            @include('page.admenu')
        </div>
    </div>
</div>
@endsection
