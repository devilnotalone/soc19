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
                        <a href="{{ url("news/$news_h_1->id")}}">
                        <strong class="card-title deep-orange-text">{{ str_limit($news_h_1->title,90) }}</strong>
                        <!-- Text -->
                        </a>
                        @inject('getDate','App\Thaidate')
                        <p class="card-text">
                            {{ str_limit($news_h_1->body,100) }}
                            <em
                                class="grey-text">{{ " ".$getDate->ThaiDate_Short(strtotime($news_h_1->created_at)) }}</em>
                        </p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <a href="{{ url("news/$news_h_1->id")}}" class="grey-text d-flex justify-content-end">
                            <i class="fas fa-angle-double-right orange-text"></i>
                        </a>

                    </div>
                    <!-- Card content -->
                </div>
                @endforeach
                <!-- Card -->
            </div>
            <!-- Card group -->
            <ul class="nav nav-tabs m-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active deep-orange-text" id="news_tab1" data-toggle="tab" href="#tab1" role="tab"
                        aria-controls="news_tab1" aria-selected="true">ประชาสัมพันธ์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" id="news_tab2" data-toggle="tab" href="#tab2" role="tab"
                        aria-controls="news_tab2" aria-selected="false">ทุนการศึกษา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" id="news_tab3" data-toggle="tab" href="#tab3" role="tab"
                        aria-controls="news_tab3" aria-selected="false">สมัครงาน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" id="news_tab4" data-toggle="tab" href="#tab4" role="tab"
                        aria-controls="news_tab4" aria-selected="false">อบรมสัมมนา</a>
                </li>
            </ul>
            <div class="tab-content m-3" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                    <div class="list-group list-group-flush">
                        @forelse ($news_1_1 as $news1_1)
                        <a href="{{ url("news/$news1_1->id")}}" class="list-group-item list-group-item-action">
                            <i class="fas fa-angle-right orange-text"></i>{{ " ".str_limit($news1_1->title,90)}}
                            @inject('getDate','App\Thaidate')
                            <em
                                class="grey-text">{{" ".$getDate->ThaiDate_Short(strtotime($news1_1->created_at)) }}</em>
                        </a>
                        @empty
                        <h5 class="text-center grey-text">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                        @endforelse
                        <a class="text-right pt-3 deep-orange-text" href="#"><em>ดูทั้งหมด</em></a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="news_tab2">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                        <div class="list-group list-group-flush">
                            @forelse ($news_2 as $news2)
                            <a href="{{ url("news/$news2->id")}}" class="list-group-item list-group-item-action">
                                <i class="fas fa-angle-right orange-text"></i>{{ " ".str_limit($news2->title,90)}}
                                @inject('getDate','App\Thaidate')
                                <em
                                    class="grey-text">{{" ".$getDate->ThaiDate_Short(strtotime($news2->created_at)) }}</em>
                            </a>
                            @empty
                            <h5 class="text-center grey-text">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                            @endforelse
                            <a class="text-right pt-3 deep-orange-text" href="#"><em>ดูทั้งหมด</em></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="news_tab3">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                        <div class="list-group list-group-flush">
                            @forelse ($news_3 as $news3)
                            <a href="{{ url("news/$news3->id")}}" class="list-group-item list-group-item-action">
                                <i class="fas fa-angle-right orange-text"></i>{{ " ".str_limit($news3->title,90)}}
                                @inject('getDate','App\Thaidate')
                                <em
                                    class="grey-text">{{" ".$getDate->ThaiDate_Short(strtotime($news3->created_at)) }}</em>
                            </a>
                            @empty
                            <h5 class="text-center grey-text">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                            @endforelse
                            <a class="text-right pt-3 deep-orange-text" href="#"><em>ดูทั้งหมด</em></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="news_tab4">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                        <div class="list-group list-group-flush">
                            @forelse ($news_4 as $news4)
                            <a href="{{ url("news/$news4->id")}}" class="list-group-item list-group-item-action">
                                <i class="fas fa-angle-right orange-text"></i>{{ " ".str_limit($news4->title,90)}}
                                @inject('getDate','App\Thaidate')
                                <em
                                    class="grey-text">{{" ".$getDate->ThaiDate_Short(strtotime($news4->created_at)) }}</em>
                            </a>
                            @empty
                            <h5 class="text-center grey-text">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                            @endforelse
                            <a class="text-right pt-3 deep-orange-text" href="#"><em>ดูทั้งหมด</em></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Voyager::image(setting('site.dean_img'))}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                    <a role="button" href="{{ url('page/philosophy-vision')}}" aria-pressed="true"
                        class="btn btn-primary">วิสัยทัศน์</a>
                    <a role="button" href="{{ url('page/identity')}}" aria-pressed="true"
                        class="btn btn-default">เอกลักษณ์สำนักวิชา</a>
                    <a role="button" href="{{ url('page/mission')}}" aria-pressed="true"
                        class="btn btn-secondary">พันธกิจ</a>
                    <a role="button" href="{{ url('page/objective')}}" aria-pressed="true"
                        class="btn btn-success">วัตถุประสงค์</a>
                    <a role="button" href="{{ url('page/goal')}}" aria-pressed="true" class="btn btn-info">เป้าหมาย</a>
                    <a role="button" href="{{ url('page/goal')}}" aria-pressed="true"
                        class="btn btn-warning">เป้าหมาย</a>
                    <a role="button" href="{{ url('page/identity')}}" aria-pressed="true"
                        class="btn btn-danger">เอกลักษณ์บัณฑิต</a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="https://www.tci-thaijo.org/index.php/social_crru" target="_blank"><img
                            src="{{ Voyager::image('image_link/thaijo.png')}}" class="img-fluid z-depth-1 m-2"></a>
                </div>
                <div class="col-md-6">
                    <a href="http://socresearch.crru.ac.th/" target="_blank"><img
                            src="{{ Voyager::image('image_link/research.png')}}" class="img-fluid z-depth-1 m-2"></a>
                </div>
                <div class="col-md-6">
                    <a href="http://wil.crru.ac.th/" target="_blank"><img
                            src="{{ Voyager::image('image_link/wil.png')}}" class="img-fluid z-depth-1 m-2"></a>
                </div>
                <div class="col-md-6">
                    <a href="#"><img src="{{ Voyager::image('image_link/download.png')}}"
                            class="img-fluid z-depth-1 m-2"></a>
                </div>
            </div>
        </div>
    </div>
</div>

