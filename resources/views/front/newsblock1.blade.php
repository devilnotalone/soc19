<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <!-- Card group -->
            <div class="card-group m-3">

                <!-- Card -->
                @foreach ($news_head_1 as $news_h_1)
                <div class="card mb-4">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ Voyager::image($news_h_1->thumbnail('cropped','image'))}}"
                            alt="Card image cap">
                        <a href="{{ url("news/$news_h_1->id")}}">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <strong class="card-title">{{ str_limit($news_h_1->title,90) }}</strong>
                        <!-- Text -->
                        @inject('getDate','App\Thaidate')
                        <p class="card-text">
                            {{ str_limit($news_h_1->body,100) }}
                            {{ " ".$getDate->ThaiDate_Short(strtotime($news_h_1->created_at)) }}
                        </p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a href="{{ url("news/$news_h_1->id")}}" class="grey-text d-flex justify-content-end">
                            <i class="fas fa-angle-double-right"></i>
                        </a>

                    </div>
                    <!-- Card content -->

                </div>
                @endforeach
                <!-- Card -->
            </div>
            <!-- Card group -->
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Voyager::image(setting('site.dean_img'))}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                    <a role="button" href="#" aria-pressed="true" class="btn btn-primary">วิสัยทัศน์</a>
                    <a role="button" href="#" aria-pressed="true" class="btn btn-default">เอกลักษณ์สำนักวิชา</a>
                    <a role="button" href="#" aria-pressed="true" class="btn btn-secondary">พันธกิจ</a>
                    <a role="button" href="#" aria-pressed="true" class="btn btn-success">วัตถุประสงค์</a>
                    <a role="button" href="#" aria-pressed="true" class="btn btn-info">เป้าหมาย</a>
                    <a role="button" href="#" aria-pressed="true" class="btn btn-warning">เป้าหมาย</a>
                    <a role="button" href="#" aria-pressed="true" class="btn btn-danger">เอกลักษณ์บัณฑิต</a>
                </div>

            </div>
            <div class="row">
                <div class="flex-fill">
                    <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!--Controls-->
                        <div class="controls-top">
                            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                    class="fas fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                        <!--/.Controls-->

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                            <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">

                                <div class="col-md-12">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="col-md-12">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Second slide-->

                            <!--Third slide-->
                            <div class="carousel-item">

                                <div class="col-md-12">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Third slide-->

                        </div>
                        <!--/.Slides-->

                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col l6 m12 s12">
            <div class="section">
                11
            </div>

        </div>
        <div class="col l6 m12 s12">
            <div class="section">
                <div class="row">
                    111
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
