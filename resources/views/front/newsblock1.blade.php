<div class="container-fluid">
    <div class="row py-4">
        <div class="col-md-8">
            <!-- Card group -->
            <div class="card-group">
                <!-- Card -->
                @foreach ($news_head_1 as $news_h_1)
                <div class="card bg-light shadow-sm mb-4">
                    <!-- Card image -->
                    <a href="{{ url("news/$news_h_1->id")}}">
                    <img src="{{ Voyager::image($news_h_1->thumbnail('cropped','image'))}}" class="card-img-top"
                        alt="SOCIAL-CRRU">
                        </a>
                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <a class="card-title font-weight-bolder" href="{{ url("news/$news_h_1->id")}}">
                        {{ str_limit($news_h_1->title,90) }}
                        <!-- Text -->
                        </a>
                        @inject('getDate','App\Thaidate')
                        <span class="card-text">
                            {!! str_limit($news_h_1->body,100) !!}

                        </span>
                        <em class="card-text"> <i class="far fa-calendar-alt text-muted"></i><small
                                class="text-muted">{{ " ".$getDate->ThaiDate_Long(strtotime($news_h_1->created_at)) }}</small>
</em>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <p></p><a href="{{ url("news/$news_h_1->id")}}" class="d-flex justify-content-end">
                            <i class="fas fa-angle-double-right orange-text"></i>
                        </a></p>

                    </div>
                    <!-- Card content -->
                </div>
                @endforeach
                <!-- Card -->
            </div>
            <!-- Card group -->


            <ul class="nav nav-tabs m-3 flex-column flex-sm-row nav-justified"" id=" myTab" role="tablist">
                    <li class="nav-item">
                <a class="nav-link active" id="news_tab1" data-toggle="tab" href="#tab1" role="tab"
                        aria-controls="news_tab1" aria-selected="true">ประชาสัมพันธ์</a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link" id="news_tab2" data-toggle="tab" href="#tab2" role="tab"
                        aria-controls="news_tab2" aria-selected="false">ทุนการศึกษา</a>
                   </li>
                    <li class="nav-item">
                        <a class="nav-link" id="news_tab3" data-toggle="tab" href="#tab3" role="tab"
                        aria-controls="news_tab3" aria-selected="false">สมัครงาน</a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link" id="news_tab4" data-toggle="tab" href="#tab4" role="tab"
                        aria-controls="news_tab4" aria-selected="false">อบรมสัมมนา</a>
                   </li>
            </ul>
            <div class="tab-content mx-3 mb-3" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                    <div class="list-group list-group-flush">
                        @forelse ($news_1_1 as $news1_1)
                        <a href="{{ url("news/$news1_1->id")}}" class="list-group-item list-group-item-action">
                            <i class="fas fa-angle-right text-primary"></i>{{ " ".str_limit($news1_1->title,90)}}
                            @inject('getDate','App\Thaidate')
                            <em
                                class="text-muted"><small>{{" ".$getDate->ThaiDate_Short(strtotime($news1_1->created_at)) }}</small></em>
                        </a>
                        @empty
                        <h5 class="text-center text-muted">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                        @endforelse
                        <a class="text-right pt-3"
                            href="{{ url("list_news/1")}}"><em>ดูทั้งหมด</em></a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="news_tab2">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                        <div class="list-group list-group-flush">
                            @forelse ($news_2 as $news2)
                            <a href="{{ url("news/$news2->id")}}" class="list-group-item list-group-item-action">
                                <i class="fas fa-angle-right text-primary"></i>{{ " ".str_limit($news2->title,90)}}
                                @inject('getDate','App\Thaidate')
                                <em
                                    class="text-muted"><small>{{" ".$getDate->ThaiDate_Short(strtotime($news2->created_at)) }}</small></em>
                            </a>
                            @empty
                            <h5 class="text-center text-muted">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                            @endforelse
                            <a class="text-right pt-3 "
                                href="{{ url("list_news/2")}}"><em>ดูทั้งหมด</em></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="news_tab3">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                        <div class="list-group list-group-flush">
                            @forelse ($news_3 as $news3)
                            <a href="{{ url("news/$news3->id")}}" class="list-group-item list-group-item-action">
                                <i class="fas fa-angle-right text-primary"></i>{{ " ".str_limit($news3->title,90)}}
                                @inject('getDate','App\Thaidate')
                                <em
                                    class="text-muted"><small>{{" ".$getDate->ThaiDate_Short(strtotime($news3->created_at)) }}</small></em>
                            </a>
                            @empty
                            <h5 class="text-center text-muted">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                            @endforelse
                            <a class="text-right pt-3"
                                href="{{ url("list_news/3")}}"><em>ดูทั้งหมด</em></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="news_tab4">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="news_tab1">
                        <div class="list-group list-group-flush">
                            @forelse ($news_4 as $news4)
                            <a href="{{ url("news/$news4->id")}}" class="list-group-item list-group-item-action">
                                <i class="fas fa-angle-right text-primary"></i>{{ " ".str_limit($news4->title,90)}}
                                @inject('getDate','App\Thaidate')
                                <em
                                    class="text-muted"><small>{{" ".$getDate->ThaiDate_Short(strtotime($news4->created_at)) }}</small></em>
                            </a>
                            @empty
                            <h5 class="text-center text-muted">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                            @endforelse
                            <a class="text-right pt-3"
                                href="{{ url("list_news/4")}}"><em>ดูทั้งหมด</em></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3">
            <div class="row">
                <div class="col-md-6">
                    <a href="mailto:lelatree@gmail.com" target="_blank"><img src="{{ Voyager::image(setting('site.dean_img'))}}"
                            class="img-fluid" alt="Responsive image"></a>
                </div>
                <div class="col-md-6">
                    <a role="button" href="{{ url('page/philosophy-vision')}}" aria-pressed="true"
                        class="btn btn-outline-primary btn-lg my-2">วิสัยทัศน์</a>
                    <a role="button" href="{{ url('page/identity')}}" aria-pressed="true"
                        class="btn btn-outline-primary btn-lg my-2">เอกลักษณ์สำนักวิชา</a>
                    <a role="button" href="{{ url('page/mission')}}" aria-pressed="true"
                        class="btn btn-outline-primary btn-lg my-2">พันธกิจ</a>
                    <a role="button" href="{{ url('page/objective')}}" aria-pressed="true"
                        class="btn btn-outline-secondary btn-lg my-2">วัตถุประสงค์</a>
                    <a role="button" href="{{ url('page/goal')}}" aria-pressed="true"
                        class="btn btn-outline-secondary btn-lg my-2">เป้าหมาย</a>
                    <a role="button" href="{{ url('page/goal')}}" aria-pressed="true"
                        class="btn btn-outline-secondary btn-lg my-2">เป้าหมาย</a>
                    <a role="button" href="{{ url('page/identity')}}" aria-pressed="true"
                        class="btn btn-outline-secondary btn-lg my-2">เอกลักษณ์บัณฑิต</a>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <a href="https://www.tci-thaijo.org/index.php/social_crru" target="_blank"><img
                            src="{{ Voyager::image('image_link/thaijo.png')}}" class="img-fluid shadow-sm m-2"></a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="http://socresearch.crru.ac.th/" target="_blank"><img
                            src="{{ Voyager::image('image_link/research.png')}}" class="img-fluid shadow-sm m-2"></a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="http://wil.crru.ac.th/" target="_blank"><img
                            src="{{ Voyager::image('image_link/wil.png')}}" class="img-fluid shadow-sm m-2"></a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="{{ url("ta_download/1")}}"><img src="{{ Voyager::image('image_link/download.png')}}"
                            class="img-fluid shadow-sm m-2"></a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="{{ Voyager::image('image_link/teach2020.jpg')}}" target="_blank"><img
                            src="{{ Voyager::image('image_link/teach.png')}}" class="img-fluid shadow-sm m-2"></a>
                </div><div class="col-md-6 col-sm-12">
                    <a href="{{ Voyager::image('image_link/freshy2020.jpg')}}" target="_blank"><img
                            src="{{ Voyager::image('image_link/student.png')}}" class="img-fluid shadow-sm m-2"></a>
                </div>
            </div>
            <div class="row m-2">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe
                        src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FBangkok&amp;src=Y3JydS5hYy50aF8xM2cwdmxhc2QwN2kzZ2Z0NnQ5bGExOGxyb0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y3JydS5hYy50aF81Zmp2cjd0bjRlZDVxMnNrbW1qOW9rdWw5NEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=dGgudGgjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%23F4511E&amp;color=%23B39DDB&amp;showTz=0&amp;showPrint=0&amp;showTitle=0"
                        style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

