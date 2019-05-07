<div class="container">
    <div class="row">
        <div class="col l6 m12 s12">
            <div class="section">
                @foreach ($news_1 as $news1)
                <a href="{{ url("news/$news1->id")}}">
                    <div class="card horizontal hoverable">
                        <div class="card-image">
                            <img src="{{ Voyager::image($news1->thumbnail('cropped','image'))}}">
                        </div>
                        <div class="card-stacked">
                            @inject('getDate','App\Thaidate')
                            <div class="card-content">
                                {{ str_limit($news1->title,90) }}
                                <div class="divider"></div>
                                <span class="grey-text" style="font-size: 0.8em"><i
                                        class="tiny material-icons">date_range</i>{{
                                " ".$getDate->ThaiDate_Short(strtotime($news1->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="col l6 m12 s12">
            <div class="section">
                <div class="row">
                    <div class="col l7 m7 s12 center">
                        <a href="#!"
                            class="btn waves-effect waves-light orange accent-3 grey-text text-darken-3">วิสัยทัศน์</a>
                        <a class="waves-effect waves-light btn-large grey lighten-1 grey-text text-darken-3"><i
                                class="material-icons right">cloud</i>เอกลักษณ์สำนักวิชา</a>
                        <a class="waves-effect waves-light btn-large grey lighten-1 grey-text text-darken-3"><i
                                class="material-icons left ">cloud</i>พันธกิจ</a>
                        <a class="waves-effect waves-light btn orange accent-3 grey-text text-darken-3">วัตถุประสงค์</a>
                        <a class="waves-effect waves-light btn orange accent-3 grey-text text-darken-3"><i
                                class="material-icons right">cloud</i>เป้าหมาย</a>
                        <a class="waves-effect waves-light btn-large grey lighten-1 grey-text text-darken-3"><i
                                class="material-icons right">cloud</i>เอกลักษณ์บัณฑิต</a>
                    </div>

                    <div class="col l5 m5 s12 center-align">
                        <a href="mailto:lelah.tre@crru.ac.th"><img class="responsive-img"
                                src="{{ Voyager::image(setting('site.dean_img'))}}"></a>
                    </div>
                </div>
                <div class="col s12 l12 m12">
                    <div class="slider">
                        <ul class="slides hoverable">
                            <li>
                                <a href="#"><img class="responsive-img"
                                        src="{{ Voyager::image('image_link/mini_slice_001.png')}}">
                                    <!-- random image -->
                                    <div class="caption right-align orange-text text-darken-4">
                                        <h4>บริการ<br>หลักสูตร</h4>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img class="responsive-img"
                                        src="{{ Voyager::image('image_link/mini_slice_002.png')}}">
                                    <!-- random image -->
                                <div class="caption left-align blue-text text-darken-4">
                                    <h4>คนดีคนเด่น<br>คนสังคมศาสตร์</h4>
                                </div>
                            </a>
                            </li>
                            {{-- <li>
                                    <img src="https://via.placeholder.com/500x200">
                                    <!-- random image -->
                                    <div class="caption right-align">
                                        <h5>WIL</h5>
                                    </div>
                                </li>
                                <li>
                                    <img src="https://via.placeholder.com/500x200">
                                    <!-- random image -->
                                    <div class="caption center-align">
                                        <h3>This is our big Tagline!</h3>
                                    </div>
                                </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="https://www.tci-thaijo.org/index.php/social_crru" target="_blank"><img
                                    src="{{ Voyager::image('image_link/thaijo.png')}}"></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="http://socresearch.crru.ac.th/" target="_blank"><img
                                    src="{{ Voyager::image('image_link/research.png')}}"></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="http://wil.crru.ac.th/" target="_blank"><img
                                    src="{{ Voyager::image('image_link/wil.png')}}"></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#"><img src="{{ Voyager::image('image_link/download.png')}}"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
