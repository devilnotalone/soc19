@extends('layouts.page')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12 col-sm-12 col-lg-9 mb-3">
            <!-- Header -->
            <header class="bg-primary text-center py-4 mb-4">
                <div class="container">
                <h2 class="font-weight-light text-white">บุคลากรสายสนับสนุน<br>ประจำสำนักวิชาสังคมศาสตร์</h2>
                </div>
            </header>
            <h4 class="font-weight-light text-primary text-right mr-4 mt-5"><i
                    class="fas fa-users"></i>{{ " ".$getSt1->department_name }}</h4>
            <hr class="divider my-4">
            <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                <div class="col-sm-12 col-md-4 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($getSt1->picture)
                        <img src="{{ Voyager::image($getSt1->picture)}}" class="card-img-top"
                            alt="...">
                        @endisset
                        @empty($getSt1->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $getSt1->prefix_name.$getSt1->name." ".$getSt1->surname}}</h6>
                            <div class="card-text text-primary">{!!
                                $getSt1->position_name."<br>
                                <hr class='divider my-0'>หัวหน้าสำนักงาน"
                                !!}</div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-12 col-md-8 col-lg-9">
                     <div class="d-flex flex-md-row flex-sm-column mb-3 align-items-start flex-wrap">
                         @foreach ($getSt2 as $st2)
                         <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                             <div class="card border-0 shadow-sm">
                                 @isset($st2->picture)
                                 <img src="{{ Voyager::image($st2->picture)}}" class="card-img-top" alt="...">
                                 @endisset
                                 @empty($st2->picture)
                                 <i class="fas fa-user fa-10x text-center text-muted"></i>
                                 @endempty
                                 <div class="card-body text-center">
                                     <h6 class="card-title mb-0 text-black">
                                         {{ $st2->prefix_name.$st2->name." ".$st2->surname}}
                                     </h6>
                                    <div class="card-text text-primary">{{ $st2->position_name }}</div>
                                 </div>
                             </div>
                         </div>
                         @endforeach
                     </div>
                 </div>
            </div>
            <h4 class="font-weight-light text-primary text-right mr-4 mt-4"><i
                    class="fas fa-users"></i> สำนักงานสาขาวิชาคหกรรมศาสตร์ประยุกต์</h4>
            <hr class="divider m-2">
            <div class="d-flex flex-md-row flex-sm-column mb-2 flex-wrap align-items-start">
                @foreach ($getSt3 as $st3)
                <div class="col-sm-12 col-md-3 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($st3->picture)
                        <img src="{{ Voyager::image($st3->picture)}}" class="card-img-top" alt="...">
                        @endisset
                        @empty($st3->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $st3->prefix_name.$st3->name." ".$st3->surname}}
                            </h6>
                            <div class="card-text text-primary">{{ $st3->position_name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h4 class="font-weight-light text-primary text-right mr-4 mt-4"><i
                    class="fas fa-users"></i> ศูนย์วิจัยและพัฒนาผลิตภัณฑ์ท้องถิ่น</h4>
            <hr class="divider m-2">
            <div class="d-flex flex-md-row flex-sm-column mb-2 flex-wrap align-items-start">
                @foreach ($getSt4 as $st4)
                <div class="col-sm-12 col-md-3 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($st4->picture)
                        <img src="{{ Voyager::image($st4->picture)}}" class="card-img-top" alt="...">
                        @endisset
                        @empty($st4->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $st4->prefix_name.$st4->name." ".$st4->surname}}
                            </h6>
                            <div class="card-text text-primary">{{ $st4->position_name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h4 class="font-weight-light text-primary text-right mr-4 mt-4"><i
                    class="fas fa-users"></i> ศูนย์สิ่งทอล้านนา</h4>
            <hr class="divider m-2">
            <div class="d-flex flex-md-row flex-sm-column mb-2 flex-wrap align-items-start">
                @foreach ($getSt5 as $st5)
                <div class="col-sm-12 col-md-3 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($st5->picture)
                        <img src="{{ Voyager::image($st5->picture)}}" class="card-img-top" alt="...">
                        @endisset
                        @empty($st5->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $st5->prefix_name.$st5->name." ".$st5->surname}}
                            </h6>
                            <div class="card-text text-primary">{{ $st5->position_name }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <h4 class="font-weight-light text-primary text-right mr-4 mt-4"><i
                    class="fas fa-users"></i> สถาบันอาเซียนศึกษา</h4>
            <hr class="divider m-2">
            <div class="d-flex flex-md-row flex-sm-column mb-2 flex-wrap align-items-start">
                @foreach ($getSt6 as $st6)
                <div class="col-sm-12 col-md-3 col-lg-3 p-2">
                    <div class="card border-0 shadow-sm">
                        @isset($st6->picture)
                        <img src="{{ Voyager::image($st6->picture)}}" class="card-img-top" alt="...">
                        @endisset
                        @empty($st6->picture)
                        <i class="fas fa-user fa-10x text-center text-muted"></i>
                        @endempty
                        <div class="card-body text-center">
                            <h6 class="card-title mb-0 text-black">
                                {{ $st6->prefix_name.$st6->name." ".$st6->surname}}
                            </h6>
                            <div class="card-text text-primary">{{ $st6->position_name }}</div>
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
