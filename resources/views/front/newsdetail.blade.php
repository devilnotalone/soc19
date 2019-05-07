<div class='container'>
    <div class="section">
        <nav class="deep-orange lighten-1">
            <div class="nav-wrapper" style="margin-left: 3%;">
                <div class="col s12">
                    <a href="{{ url('/')}}" class="breadcrumb">หน้าหลัก</a>
                    <a href="{{ url('list_news/1')}}" class="breadcrumb">ข่าว</a>
                    <a href="#" class="breadcrumb">{{ $news_type->type }}</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col s12 m12 l8">
            @isset($news->image)
            <img class="materialboxed responsive-img" src="{{ Voyager::image($news->image)}}" alt="{{ $news->title }}">
            @endisset
            <h4 class="grey-text text-darken-3">{{$news->title}}</h4>
            @inject('getDate','App\Thaidate')
            <em class="grey-text">
                <i
                    class="tiny material-icons">date_range</i>{{ " ประกาศวันที่ ".$getDate->ThaiDate_Long(strtotime($news->created_at)) }}</em>
            <p class="grey-text text-darken-3">
                {!! $news->body !!}
            </p>
            @isset($news->file)
            <div class="card-panel grey lighten-2 hoverable center">
                    <h6 class="grey-text text-darken-4">
                        ดาวน์โหลดเอกสารที่เกี่ยวข้อง
                    </h6>
                @foreach(json_decode($news->file) as $file)
                <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                    target="_blank">
                    {{ $file->original_name ?: '' }}
                </a>
                @endforeach
            </div>
            @endisset
        </div>
        <div class="col s12 m12 l4">
            <ul class="collection with-header">
                <li href="#" class="collection-header deep-orange lighten-1 grey-text text-darken-4 right-align">
                    <h5>ข่าว{{ $news_type->type}}ล่าสุด</h5>
                </li>
                @foreach ($news_all as $newsall)
                <li class="collection-item hoverable">
                    <a class="truncate grey-text text-darken-3" href="{{ url("news/$newsall->id")}}""><i class="
                        material-icons orange-text"
                        style="font-size: 1em;">add</i>{{ str_limit(" ".$newsall->title,90) }}</a>
                </li>
                @endforeach
            </ul>
            <div class="card-panel">
                <h5 class="right-align">ประเภทข่าว</h5>
            </div>

            <div class="collection">
                @foreach ($news_type_all as $types)
                <a href="{{ url("list_news/$types->id")}}" class="collection-item orange-text text-darken-4">{{-- <span
                        class="badge">{{ $count->count_type}}</span> --}}{{ "ข่าว".$types->type }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
