@extends('layouts.page')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <!-- Jumbotron -->
            <div class="jumbotron">
                <!-- Title -->
                <h4 class="card-title h4 pb-2 deep-orange-text text-center"><strong>{{ $page->title}}</strong></h4>

                <!-- Card image -->
                <div class="view overlay my-4">
                    @isset($page->image)
                        <img class="img-fluid" src="{{ Voyager::image($page->image)}}">
                    @endisset
                </div>
                <p class="card-text">{!! $page->body !!}</p>
            </div>
            <!-- Jumbotron -->
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header gradient-card-header peach-gradient">
                    <h5 class="text-right">เกี่ยวกับสำนักวิชา</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ url('page/about')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}ประวัติความเป็นมา</a>
                    <a href="{{ url('page/philosophy-vision')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}ปรัชญา / วิสัยทัศน์</a>
                    <a href="{{ url('page/identity')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}เอกลักษณ์สำนักวิชา</a>
                    <a href="{{ url('page/mission')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}พันธกิจ</a>
                    <a href="{{ url('page/objective')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}วัตถุประสงค์</a>
                    <a href="{{ url('page/goal')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}เป้าหมาย</a>
                    <a href="{{ url('page/Identities')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}อัตลักษณ์บัณฑิต</a>
                    <a href="{{ url('page/plan')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}แผนยุทธศาสตร์ 4 ปี</a>
                    <a href="{{ url('page/about')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right deep-orange-text"></i>{{" "}}โครงสร้างการบริหารงาน</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
