<div class="section">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-8 text-center text-white bg-secondary">
            <div class="row">
                @foreach ($album as $al)
                <div class="col-xs-6 col-sm-3 px-0 hover-blur">
                    <a href="{{ url("gallery/$al->id")}}" title="">
                        @php $image = json_decode($al->gallery); @endphp
                        @if(isset($image[0]))
                        <img src="{{Voyager::image($image[0])}}" class="img-fluid">
                        @endif
                        {{--  <img src="http://placeimg.com/260/260/nature/3/" alt="" /> --}}
                        <h6><span class="text-white">{{ $al->title }}</span></h6>
                    </a>
                </div>
                @endforeach
            </div>
            {{-- <hr class="divider my-1">
            <h4 class="display-5">Galleries of Social Sciences</h4>
            <p class="lead">ประมวลภาพกิจกรรมสำนักวิชาสังคมศาสตร์</p> --}}
        </div>
        <div class="col-md-12 col-sm-12 col-lg-4 bg-white">
            111
        </div>
    </div>
</div>
