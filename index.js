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

  // set up isotope layout options
  var $grid = $(".grid").isotope({
    itemSelector : '.grid-item',
    layoutMode : 'fitRows'
  });

  // click event listener
  $(".button-group").on("click", "button", function() {
    var filterValue = $(this).attr('data-filter');
    console.log(filterValue);
    $grid.isotope({ filter: filterValue});
  });

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
})

});