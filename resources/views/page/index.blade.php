@extends('layouts.page')
@section('content')
<div class='container'>
<div class="section">
    <div class="row">
        <div class="col s12 m12 l8">
            <div class="card-panel"><h5 class="orange-text text-darken-3">{{ $page->title}}</h5></div>
            {!! $page->body !!}
        </div>
        <div class="col s12 m12 l4">
            <div class="card-panel">
                <h4 class="right-align orange-text text-darken-3"><i class="medium material-icons">
                        chat
                    </i> เกี่ยวกับเรา</h4>
                <h4 class='right-align grey-text'>About</h4>
            </div>

            <div class="collection">
                <a href="{{ url('page/about')}}" class="collection-item grey-text text-darken-3">ประวัติความเป็นมา</a>
                <a href="{{ url('page/philosophy-vision')}}" class="collection-item grey-text text-darken-3">ปรัชญา /
                    วิสัยทัศน์</a>
                <a href="{{ url('page/identity')}}"
                    class="collection-item grey-text text-darken-3">เอกลักษณ์สำนักวิชา</a>
                <a href="{{ url('page/mission')}}" class="collection-item grey-text text-darken-3">พันธกิจ</a>
                <a href="{{ url('page/objective')}}" class="collection-item grey-text text-darken-3">วัตถุประสงค์</a>
                <a href="{{ url('page/goal')}}" class="collection-item grey-text text-darken-3">เป้าหมาย</a>
                <a href="{{ url('page/Identities')}}"
                    class="collection-item grey-text text-darken-3">อัตลักษณ์บัณฑิต</a>
                <a href="{{ url('page/plan')}}" class="collection-item grey-text text-darken-3">แผนยุทธศาสตร์ 4 ปี</a>
                <a href="{{ url('page/about')}}"
                    class="collection-item grey-text text-darken-3">โครงสร้างการบริหารงาน</a>
            </div>
             @isset($page->image)
             <img class="responsive-img" src="{{ Voyager::image($page->image)}}">
             @endisset
        </div>
    </div>
    </div>
</div>
@endsection
