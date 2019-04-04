 $(document).ready(function () {
     $('.sidenav').sidenav();
     $('.tabs').tabs();
     $('.slider').slider({
         indicators : true,
         height : 150,
     });
 });
 $('.carousel.carousel-slider').carousel({
     fullWidth: true
 });

  autoplay();
 function autoplay() {
     $('.carousel').carousel('next');
     setTimeout(autoplay, 10000);
 }

