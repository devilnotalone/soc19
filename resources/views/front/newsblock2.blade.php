<div class="row">
    <!-- Info News-Block-02 -->
    <div class="divider"></div>
    <div class="col l6 m12 s12">
        <div class="section">
            {{-- News --}}
            <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
                <li class="tab"><a href="#news1" class="orange-text text-darken-3">ประชาสัมพันธ์</a></li>
                <li class="tab"><a href="#news2" class="orange-text text-darken-3">ทุนการศึกษา</a></li>
                <li class="tab"><a href="#news3" class="orange-text text-darken-3">สมัครงาน</a></li>
                <li class="tab"><a href="#news4" class="orange-text text-darken-3">อบรมสัมมนา</a></li>
            </ul>
            <div id="news1" class="collection">
                @forelse ($news_1_1 as $news1_1)
                <a href="{{ url("news/$news1_1->id")}}" class="collection-item blue-grey-text text-darken-3">
                    <i class="material-icons orange-text" style="font-size: 1em;">add</i>{{ "
                    ".str_limit($news1_1->title,85)}}
                    @inject('getDate','App\Thaidate')
                    <i class="grey-text" style="font-size: 0.8em">{{"
                        ".$getDate->ThaiDate_Short(strtotime($news1_1->created_at)) }}</i></a>
                @empty
                <h5 class="center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
                <a class='collection-item right orange-text text-darken-3' style="font-size: 0.9em; " href=" #"><em>ดูทั้งหมด</em></a>
            </div>
            <div id="news2" class="collection">
                @forelse ($news_2 as $news2)
                <a href="{{ url("news/$news2->id")}}" class="collection-item blue-grey-text text-darken-3">
                    <i class="material-icons orange-text" style="font-size: 1em;">add</i>{{ "
                    ".str_limit($news2->title,85) }}
                    @inject('getDate','App\Thaidate')
                    <i class="grey-text" style="font-size: 0.8em">{{"
                        ".$getDate->ThaiDate_Short(strtotime($news2->created_at)) }}</i></a>
                @empty
                <h5 class="center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
                <a class='collection-item right orange-text text-darken-3' style="font-size: 0.9em; " href=" #"><em>ดูทั้งหมด</em></a>
            </div>
            <div id="news3" class="collection">
                @forelse ($news_3 as $news3)
                <a href="{{ url("news/$news2->id")}}" class="collection-item blue-grey-text text-darken-3">
                    <i class="material-icons orange-text" style="font-size: 1em;">add</i>{{ "
                    ".str_limit($news3->title,85) }}
                    @inject('getDate','App\Thaidate')
                    <i class="grey-text" style="font-size: 0.8em">{{"
                        ".$getDate->ThaiDate_Short(strtotime($news3->created_at)) }}</i></a>
                @empty
                <h5 class="center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
                <a class='collection-item right orange-text text-darken-3' style="font-size: 0.9em; " href=" #"><em>ดูทั้งหมด</em></a>
            </div>
            <div id="news4" class="collection">
                @forelse ($news_4 as $news4)
                <a href="{{ url("news/$news2->id")}}" class="collection-item blue-grey-text text-darken-3">
                    <i class="material-icons orange-text" style="font-size: 1em;">add</i>{{ "
                    ".str_limit($news4->title,85) }}
                    @inject('getDate','App\Thaidate')
                    <i class="grey-text" style="font-size: 0.8em">{{"
                        ".$getDate->ThaiDate_Short(strtotime($news4->created_at)) }}</i></a>
                @empty
                <h5 class="center">ยังไม่มีข้อมูลข่าวสารในส่วนนี้</h5>
                @endforelse
                <a class='collection-item right orange-text text-darken-3' style="font-size: 0.9em; " href=" #"><em>ดูทั้งหมด</em></a>
            </div>
            {{-- End News --}}
        </div>
    </div>
    <div class="col l6 m12 s12">
        <div class="section">
            <div class="col l6 m12 s12">

            </div>
            <div class="col l6 m12 s12">
                <div class="video-container">
                    <<iframe width="100%" src="https://www.youtube-nocookie.com/embed/UUXUoRlU8z4" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
