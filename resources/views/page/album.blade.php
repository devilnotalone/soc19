@extends('layouts.page')
@section('content')
@inject('getRes','App\Gallery')
        <section class="bg-transparent py-5 parallax4">
            <div class="container">
                <h1 class="text-dark text-center">ภาพกิจกรรมสำนักวิชาสังคมศาสตร์</h1>
                <p class="lead text-dark text-justify">สำนักวิชาสังคมศาสตร์ มหาวิทยาลัยราชภัฏเชียงราย ได้ส่งเสริมการจัดกิจกรรมให้กับบุคลกร และนักศึกษา โดยกิจกรรมต่าง ๆ ที่จัดขึ้นนั้นได้ครอบคลุม
                     ทั้งในด้านการส่งเสริมด้านความรู้ความสามารถของนักศึกษา การบริการวิชาการ การทำนุบำรุงศิลปวัฒนธรรม ตลอดจนด้านอื่น ๆ ที่เป็นประโยชน์แก่นักศึกษาและผู้เข้าร่วมกิจกรรม</p>
            </div>
        </section>
        <div class="album pt-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card-group">
                    @foreach ($album as $al)

                    <div class="col-md-4 p-3">
                        <a href="{{ url("gallery/$al->id")}}">
                        <div class="card shadow-sm">
                            @php $image = json_decode($al->gallery); @endphp
                            @if(isset($image[0]))
                            <img src="{{Voyager::image($image[0])}}" class="card-img-top">
                            @endif
                            <div class="card-body">
                                <p class="card-text">{{ $al->title }}</p>
                                @inject('getDate','App\Thaidate')
                                <hr class="divider my-0">
                                <em class="card-text"> <i class="far fa-calendar-alt text-muted"></i><small
                                        class="text-muted">{{ " ".$getDate->ThaiDate_Long(strtotime($al->created_at)) }}</small>
                                </em>
                            </div>
                        </div>
                        </a>
                    </div>

                    @endforeach
                    </div>
                </div>
                {{ $album->links('vendor.pagination.soc') }}
            </div>
        </div>
@endsection
