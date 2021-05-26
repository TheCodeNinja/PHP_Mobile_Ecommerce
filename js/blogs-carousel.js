// blogs owl carousel
$("#blogs .owl-carousel").owlCarousel({
  loop: true,
  nav: false,
  dots: true,
  responsive : {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 3
    }
  }
});