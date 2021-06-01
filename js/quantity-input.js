// product qty section
let $qty_up = $(".qty .qty-up");
let $qty_down = $(".qty .qty-down");
let $deal_price = $("#deal-price");
// let $input = $(".qty .qty_input");

// click on qty up button
$qty_up.click(function(e) {
  let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
  let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

  // change product price using ajax call
  $.ajax({
    url: "templates/ajax.php", 
    type: 'post',
    data: {
      itemId: $(this).data("id"),
    },
    success: function(result) {
      // console.log(result);
      let obj = JSON.parse(result);
      let item_price = obj[0]['item_price'];

      if ($input.val() >= 1 && $input.val() <= 9) {
        $input.val(function(i, oldval) {
          return ++oldval;
        });
        $price.text(parseInt(item_price * $input.val()).toFixed(2));

        // set subtotal price
        let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
        $deal_price.text(subtotal.toFixed(2));
      }
    }
  });
});

// click on qty down button
$qty_down.click(function(e) {
  let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
  let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

  // change product price using ajax call
  $.ajax({
    url: "templates/ajax.php", 
    type: 'post',
    data: {
      itemId: $(this).data("id"),
    },
    success: function(result) {
      // console.log(result);
      let obj = JSON.parse(result);
      let item_price = obj[0]['item_price'];

      if ($input.val() > 1 && $input.val() <= 10) {
        $input.val(function(i, oldval) {
          return --oldval;
        });
        $price.text(parseInt(item_price * $input.val()).toFixed(2));

        // set subtotal price
        let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
        $deal_price.text(subtotal.toFixed(2));
      }
    }
  });
});

/** 
<div data-role="page" data-last-value="43" data-hidden="true" data-options='{"name":"John"}'></div>

$( "div" ).data( "role" ) === "page";
$( "div" ).data( "lastValue" ) === 43;
$( "div" ).data( "hidden" ) === true;
$( "div" ).data( "options" ).name === "John";

*/