<div class='container'>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white shadow-sm">
                <li class="breadcrumb-item"><a class='soc-link1' href="{{ url('/')}}">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a class='soc-link1' href="#">ข่าว</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $news_type->type}}</li>
                </ol>
            </nav>
    <div class="row px-3">
        <div class="col-md-8">
        <div class="col-md-12">
            @isset($news->image)
                <img class="img-fluid mb-3" src="{{ Voyager::image($news->image)}}" alt="{{ $news->title }}">
            @endisset
            <h4 class="heading-large mb-1">{{$news->title}}</h4>
            @inject('getDate','App\Thaidate')
            <em class="soc-link1 small">{{ "ประกาศวันที่ ".$getDate->ThaiDate_Long(strtotime($news->created_at)) }}</em>
            <div class="text-muted pt-3 text-justify">
                {!! $news->body !!}
            </div>
            @isset($news->file)
            <div class="bg-secondary shadow-sm mb-3">
                <a class='text-white' href="{{ URL::asset($news->file) }}">
                    <div class="p-3 text-center">
                        ดาวน์โหลดเอกสารที่เกี่ยวข้อง
                    </div>
                </a>
            </div>
            @endisset
        </div>
        </div>
        <aside class="col-md-4">
            <div class="list-group mb-3">
                <a href="#" class="list-group-item list-group-item-action list-group-item-primary active">
                ข่าว{{ $news_type->type}}ล่าสุด
              </a>
            @foreach ($news_all as $newsall)
                    <a class="list-group-item list-group-item-action text-muted small" href="{{ url("news/$newsall->id")}}""><i class="fas fa-angle-right soc-link1 mr-1"></i>{{ str_limit($newsall->title,90) }}</a>            
            @endforeach                
            </div>    

            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action list-group-item-light active">
                ข่าวสารสังคมศาสตร์
                </a>
                @foreach ($news_type_all as $news_t_all)
                        <a class="list-group-item list-group-item-action text-muted" href="{{ url("news/$newsall->id")}}""><h6>{{ $news_t_all->type }}</h6></a>            
                @endforeach                
            </div> 
            
        </aside>
    </div>
</div>