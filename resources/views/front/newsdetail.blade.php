<div class="container">
    <div class="row my-4">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/')}}">หน้าหลัก</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('list_news/1')}}">ข่าว</a></li>
                    <li class="breadcrumb-item active">{{ $news_type->type }}</li>
                </ol>
            </nav>
            <!-- Card -->
            <div class="card">

                <!-- Card image -->
                @isset($news->image)
                <img class="card-img-top" src="{{ Voyager::image($news->image)}}" alt="Card image cap">
                @endisset
                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title"><a>{{$news->title}}</a></h4>
                    @inject('getDate','App\Thaidate')
                    <em class="text-muted">
                        <i
                            class="far fa-calendar-alt"></i>{{ " วันที่ ".$getDate->ThaiDate_Long(strtotime($news->created_at)) }}</em>
                    <!-- Text -->
                    <p class="card-text">{!! $news->body !!}</p>
                    <!-- Button -->
                    <hr>
                    @isset($news->file)
                    @foreach(json_decode($news->file) as $file)
                    <a class="btn btn-info btn-block"
                        href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                        target="_blank">
                        {{ $file->original_name ?: '' }}
                    </a>
                    @endforeach
                    @endisset
                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col-md-4">
            <div class="card  bg-primary">
                <div class="card-header">
                    <h5 class="text-right text-white">ข่าว{{ $news_type->type}}ล่าสุด</h5>
                </div>
                <div class="list-group list-group-flush">
                    @foreach ($news_all as $newsall)
                    <a href="{{ url("news/$newsall->id")}}"
                        class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{ str_limit(" ".$newsall->title,90) }}</a>
                    @endforeach
                </div>
            </div>
            <div class="card bg-info my-4">
                <div class="card-header">
                    <h5 class="text-right">ประเภทข่าว</h5>
                </div>
                <div class="list-group list-group-flush">
                    @foreach ($news_type_all as $types)
                    <a href="{{ url("list_news/$types->id")}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-info"></i>{{ " ข่าว".$types->type }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
