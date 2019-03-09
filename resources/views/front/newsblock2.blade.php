<!-- Info News-Block-02 -->
<div class='row'>
<section class="section-01 float-left w-100 py-5">
    <div class='container'>
        <div class="row px-3">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="heading-large">ข่าวสารสังคมศาสตร์</h4>
                    </div>
                    @foreach ($news_1 as $news1)
                       
                    <div class="col-md-6">
                        <div class="card mb-2">
                            <img class="img-fluid" src="{{ Voyager::image($news1->thumbnail('cropped','image'))}}">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2 class="title-small"><a class='soc-link2' href="{{ url("news/$news1->id")}}">{{ str_limit($news1->title,50) }}</a></h2>
                                </div>
                                <p class="card-text soc-link2 text-justify">{{str_limit($news1->body,150)}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class='row'>
                    <div class="col-md-12">
                        <div class="p-2 bg-white rounded border shadow-sm mb-4">
                            <nav class='side-bar'>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">ประชาสัมพันธ์</a>
                                    <a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">ทุนการศึกษา</a>
                                    <a class="nav-item nav-link" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">การสมัครงาน</a>
                                    <a class="nav-item nav-link" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-contact" aria-selected="false">อบรมสัมมนา</a>
                                </div>
                            </nav>
                            <div class="tab-content sidebar-tabing mt-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                                    <ul class="list-group list-group-flush">
                                    @forelse ($news_1_1 as $news1_1)
                                        <li class="list-group-item p-1 small">
                                            <i class="fas fa-angle-right soc-link1"></i>
                                            <a class="text-muted" href="{{ url("news/$news1_1->id")}}"">{{ str_limit($news1_1->title,90) }}</a> 
                                        @inject('getDate','App\Thaidate')
                                        <em class="soc-link1 small">{{ " ".$getDate->ThaiDate_Short(strtotime($news1_1->created_at)) }}</em></li>
                                    @empty
                                        <h5 class="m-5 small align-center text-center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                                    @endforelse     
                                    </ul>                               
                                    <small class="d-block text-right mt-3">
                                        <a class='soc-link1' href="#">ดูทั้งหมด</a>
                                    </small>
                                    
                                </div>
                                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                                    <ul class="list-group list-group-flush">
                                        @forelse ($news_2 as $news2)
                                        <li class="list-group-item p-1 small">
                                            <i class="fas fa-angle-right soc-link1"></i>
                                            <a class="text-muted" href="{{ url("news/$news2->id")}}"">{{ str_limit($news2->title,90) }}</a> 
                                            @inject('getDate','App\Thaidate')
                                            <em class="soc-link1 small">{{ " ".$getDate->ThaiDate_Short(strtotime($news2->created_at)) }}</em></li>
                                        @empty
                                        <h5 class="m-5 small align-center text-center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                                        @endforelse
                                    </ul>
                                    <small class="d-block text-right mt-3">
                                        <a class='soc-link1' href="#">ดูทั้งหมด</a>
                                    </small>                                
                                </div>
                                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                                    <ul class="list-group list-group-flush">
                                        @forelse ($news_3 as $news3)
                                        <li class="list-group-item p-1 small">
                                            <i class="fas fa-angle-right soc-link1"></i>
                                            <a class="text-muted" href="{{ url("news/$news3->id")}}"">{{ str_limit($news3->title,90) }}</a> 
                                            @inject('getDate','App\Thaidate')
                                            <em class="soc-link1 small">{{ " ".$getDate->ThaiDate_Short(strtotime($news3->created_at)) }}</em></li>
                                        @empty
                                        <h5 class="m-5 small align-center text-center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                                        @endforelse
                                    </ul>
                                    <small class="d-block text-right mt-3">
                                        <a class='soc-link1' href="#">ดูทั้งหมด</a>
                                    </small>                                
                                </div>
                                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                                    <ul class="list-group list-group-flush">
                                        @forelse ($news_4 as $news4)
                                        <li class="list-group-item p-1 small">
                                            <i class="fas fa-angle-right soc-link1"></i>
                                            <a class="text-muted" href="{{ url("news/$news4->id")}}"">{{ str_limit($news4->title,90) }}</a> 
                                            @inject('getDate','App\Thaidate')
                                            <em class="soc-link1 small">{{ " ".$getDate->ThaiDate_Short(strtotime($news4->created_at)) }}</em></li>
                                        @empty
                                        <h5 class="m-5 small align-center text-center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                                        @endforelse
                                    </ul>
                                    <small class="d-block text-right mt-3">
                                        <a class='soc-link1' href="#">ดูทั้งหมด</a>
                                    </small>                                
                                </div>
                            </div>

                           
                            
                        </div>

                    </div>
                </div>
            </div>
            <aside class="col-md-4 side-bar">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">คนเด่น</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">กิจกรรมดี</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab">วิถีวัฒนธรรม</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content sidebar-tabing">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="http://via.placeholder.com/100x100" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a class='soc-link1' href="#">You're losing money by not using sports bras</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">date</span></div>
                            </div>
                        </div>
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="http://via.placeholder.com/100x100" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">Problems with professional beauty supplies</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="http://via.placeholder.com/100x100" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">How chicken dishes aren't as bad as you think</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="img/movie.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">Why entertainment centers will make you question everything</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="img/auto.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">The best ways to utilize automotive jobs</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="img/business1.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">The worst Movies about live tennis scores</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="img/food.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">How chicken dishes aren't as bad as you think</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="img/business.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">hy entertainment centers will make you question everything</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"> <a href="#"><img class="d-flex mr-3" src="img/sport1.jpg" alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">The best ways to utilize automotive jobs</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-sec">
                    <h4 class="heading-small">Featured Video</h4>
                    <div class="video-block">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
</div>