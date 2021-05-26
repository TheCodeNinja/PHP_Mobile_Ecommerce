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
  });

  // product qty section
  let $qty_up = $(".qty .qty-up");
  let $qty_down = $(".qty .qty-down");
  // let $input = $(".qty .qty_input");

  // click on qty up button
  $qty_up.click(function(e) {
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if ($input.val() >= 1 && $input.val() <= 9) {
      $input.val(function(i, oldval) {
        return ++oldval;
      });
    }
  });

  // click on qty down button
  $qty_down.click(function(e) {
    let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
    if ($input.val() > 1 && $input.val() <= 10) {
      $input.val(function(i, oldval) {
        return --oldval;
      });
    }
  });

  /** 
  <div data-role="page" data-last-value="43" data-hidden="true" data-options='{"name":"John"}'></div>

  $( "div" ).data( "role" ) === "page";
  $( "div" ).data( "lastValue" ) === 43;
  $( "div" ).data( "hidden" ) === true;
  $( "div" ).data( "options" ).name === "John";

  */

});