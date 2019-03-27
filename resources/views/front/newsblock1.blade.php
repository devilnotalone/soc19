<div class="container">
    <div class="row">
        <div class="col l6 m12 s12">
            <div class="divider"></div>
            <div class="section">
                @foreach ($news_1 as $news1)
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{ Voyager::image($news1->thumbnail('cropped','image'))}}">
                    </div>
                    <div class="card-stacked">
                        @inject('getDate','App\Thaidate')
                        <div class="card-content">
                            <a href="{{ url("news/$news1->id")}}">
                                {{ str_limit($news1->title,90) }}</a>
                            <div class="divider"></div>
                            <span class="grey-text" style="font-size: 0.8em"><i class="tiny material-icons">date_range</i>{{
                                " ".$getDate->ThaiDate_Short(strtotime($news1->created_at)) }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col l6 m12 s12">
            <div class="section">
                <div class="row">
                    <div class="col l8 m8 s12 center">
                        <a href="#!" class="btn waves-effect waves-light orange accent-3 grey-text text-darken-3">วิสัยทัศน์</a>
                        <a class="waves-effect waves-light btn-large grey lighten-1 grey-text text-darken-3"><i class="material-icons right">cloud</i>เอกลักษณ์สำนักวิชา</a>
                        <a class="waves-effect waves-light btn-large grey lighten-1 grey-text text-darken-3"><i class="material-icons left ">cloud</i>พันธกิจ</a>
                        <a class="waves-effect waves-light btn orange accent-3 grey-text text-darken-3">วัตถุประสงค์</a>
                        <a class="waves-effect waves-light btn orange accent-3 grey-text text-darken-3"><i class="material-icons right">cloud</i>เป้าหมาย</a>
                        <a class="waves-effect waves-light btn-large grey lighten-1 grey-text text-darken-3"><i class="material-icons right">cloud</i>เอกลักษณ์บัณฑิต</a>
                        <h5 class="orange-text text-accent-4">ผศ.ดร.เลหล้า ตรีเอกานุกูล<br>
                            <span class="grey-text right" style="font-size:0.8em;">คณบดีสำนักวิชาสังคมศาสตร์</span></h5>
                    </div>

                    <div class="col l4 m4 s12 center-align">
                        <img class="responsive-img" src="{{ Voyager::image(setting('site.dean_img'))}}">
                    </div>
                </div>
                <div class="col s12 l12 m12">
                    <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                            <div class="col s3">
                                <img src="https://via.placeholder.com/150x150" alt="" class="responsive-img">
                                <!-- notice the "circle" class -->
                            </div>
                            <div class="col s9">
                                <span class="black-text">
                                    This is a square image. Add the "circle" class to it to make it appear circular.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#"><img src="https://via.placeholder.com/150x50"></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#"><img src="https://via.placeholder.com/150x50"></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#"><img src="https://via.placeholder.com/150x50"></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#"><img src="https://via.placeholder.com/150x50"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
