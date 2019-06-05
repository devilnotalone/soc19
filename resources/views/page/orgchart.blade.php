@extends('layouts.chart')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12 col-sm-12 mb-3 col-lg-12">
            <!-- Chart -->
             <div style="width: 960px; height: 720px; margin: 10px; position: relative;"><iframe allowfullscreen
                     frameborder="0" style="width:960px; height:720px"
                     src="https://www.lucidchart.com/documents/embeddedchart/a0c9867b-7e99-4a34-85c7-2a433268c7ee"
                     id="7uMmWlwfg~nE"></iframe></div>
       {{--  <div class="col-md-12 col-sm-12 col-lg-2">
            <div class="card bg-primary mb-3">
                <div class="card-header text-white">
                    <h5 class="text-right">เกี่ยวกับสำนักวิชา</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ url('page/about')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}ประวัติความเป็นมา</a>
                    <a href="{{ url('page/philosophy-vision')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}ปรัชญา / วิสัยทัศน์</a>
                    <a href="{{ url('page/identity')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}เอกลักษณ์สำนักวิชา</a>
                    <a href="{{ url('page/mission')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}พันธกิจ</a>
                    <a href="{{ url('page/objective')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}วัตถุประสงค์</a>
                    <a href="{{ url('page/goal')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}เป้าหมาย</a>
                    <a href="{{ url('page/Identities')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}อัตลักษณ์บัณฑิต</a>
                    <a href="{{ url('page/plan')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}แผนยุทธศาสตร์ 4 ปี</a>
                    <a href="{{ url('page/about')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "}}โครงสร้างการบริหารงาน</a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
