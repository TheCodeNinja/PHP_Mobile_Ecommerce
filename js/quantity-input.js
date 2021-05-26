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