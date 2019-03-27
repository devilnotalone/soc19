 $(document).ready(function () {
     $('.sidenav').sidenav();
 });
 $('.carousel.carousel-slider').carousel({
     fullWidth: true
 });

 autoplay();
 function autoplay() {
     $('.carousel').carousel('next');
     setTimeout(autoplay, 10000);
 }

 $(document).ready(function(){
    $('.tabs').tabs();
  });

