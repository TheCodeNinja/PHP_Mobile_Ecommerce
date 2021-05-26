$(document).ready(function() {

  // banner owl carousel
  $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
  });

  // top sale owl carousel
  $("#best-sales .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive : {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000 : {
        items: 4
      },
      1200: {
        items: 5 
      }
    }
  });

});