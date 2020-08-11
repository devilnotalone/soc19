  <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
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
                <a href="{{ $slide->link }}" target="_blank">
                  <img src="{{ Voyager::image($slide->image)}}" width="100%" height="100%"
                      class="d-block w-100 bd-placeholder-img">
                 </a>
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
