 <!--Carousel Wrapper-->
 <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

     <!--Indicators-->
     <ol class="carousel-indicators">
         <?php $i=0; ?>
         @foreach( $slides as $slide)
         {{-- @for($i = 0; $i< $count_slide; $i++) --}}
         <li data-target="#carousel-example-1z" data-slide-to="{{ $i++ }}" @if($loop->first) class="active" @endif></li>
         {{-- @endfor --}}
         @endforeach
     </ol>
     <!--/.Indicators-->

     <!--Slides-->
     <div class="carousel-inner" role="listbox">
        @foreach( $slides as $slide)
         <!--First slide-->

         <div class="carousel-item @if($loop->first) active @endif">

             <div class="view"
                 style="background-image: url('{{ Voyager::image($slide->image)}}'); background-repeat: no-repeat;
                 background-size: cover;">

                 <!-- Mask & flexbox options-->
                 <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                     <!-- Content -->
                     <div class="text-center white-text mx-5 wow fadeIn mt-4">
                         <h1 class="mb-4 mt-2">
                             <strong>Learn Bootstrap 4 with MDB</strong>
                         </h1>

                         <p>
                             <strong>Best & free guide of responsive web design</strong>
                         </p>

                         <p class="mb-4 d-none d-md-block">
                             <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users.
                                 Video and
                                 written versions
                                 available. Create your own, stunning website.</strong>
                         </p>
                         <a target="_blank" href="{{ $slide->link }}"
                             class="btn btn-outline-white btn-lg">ดูรายละเอียดเพิ่มเติม
                             <i class="fas fa-graduation-cap ml-2"></i>
                         </a>
                     </div>
                     <!-- Content -->
                 </div>
                 <!-- Mask & flexbox options-->
             </div>

         </div>
         <!--/First slide-->
        @endforeach
     </div>
     <!--/.Slides-->

     <!--Controls-->
     <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
     </a>
     <!--/.Controls-->

 </div>
 <!--/.Carousel Wrapper-->
