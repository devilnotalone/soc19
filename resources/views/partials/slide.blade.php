  <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <?php $i=0; ?>
              @foreach( $slides as $slide)
              {{-- @for($i = 0; $i< $count_slide; $i++) --}}
              <li data-target="#carouselExampleCaptions" data-slide-to="{{ $i++ }}" @if($loop->first) class="active"
                  @endif></li>
              {{-- @endfor --}}
              @endforeach
          </ol>
          <div class="carousel-inner">
              @foreach( $slides as $slide)
              <div class="carousel-item @if($loop->first) active @endif">
                  <img src="{{ Voyager::image($slide->image)}}" width="100%" height="100%"
                      class="d-block w-100 bd-placeholder-img">
                  <div class="carousel-caption text-right text-dark">
                      <h1>{{ $slide->title }}</h1>
                      <h2>{{ $slide->headline }}</h2>
                      <h4>{{ $slide->detail }}</h4>
                      <p></p><a target="_blank" role="button" href="{{ $slide->link }}"
                          class="btn btn-lg btn-primary">ดูรายละเอียดเพิ่มเติม
                          <i class="fas fa-graduation-cap ml-2"></i>
                      </a></p>
                  </div>
              </div>
              @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
  <hr class="divider my-0">
