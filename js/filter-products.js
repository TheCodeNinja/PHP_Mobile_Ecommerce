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