<!-- Special Price -->
<?php
  /**
  | array_map() :
  |  Send each value of an array to a function, multiply each value by itself, 
  |  and return an array with the new values
  |
  | array_unique() :
  |  Remove duplicate values from an array
  |
  | sort() :
  |  sorts an indexed array in ascending order
  |
  | shuffle() :
  |  Randomize the order of the elements in the array
  */
  $brands = array_map(function ($product){ return $product['item_brand']; }, $products_shuffle);
  $unique_brands = array_unique($brands);
  sort($unique_brands);
  shuffle($products_shuffle);
?>

<section id="special-price">
  <div class="container">
    <h4 class="font-rubik font-size-20">Special Price</h4>
    <div id="filters" class="button-group text-right font-baloo font-size-16">
      <button class="btn is-checked" data-filter="*">All Brand</button>
      <?php
        array_map(function($brand) {
          printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
        }, $unique_brands);
      ?>
    </div>

    <div class="grid">
      <?php array_map(function($product) { ?>
        <div class="grid-item border <?php echo $product['item_brand'] ?? "Brand"; ?>">
          <div class="item py-2">
            <div class="product font-rale">
              <a href="<?php printf('%s?item_id=%s', 'product-details.php',  $product['item_id']); ?>">
                <img src="<?php echo $product['item_image'] ?? "./assets/products/13.png"; ?>" alt="product1" class="img-fluid">
              </a>
              <div class="text-center">
                <h6><?php echo $product['item_name'] ?? "Unknown"; ?></h6>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      <?php }, $products_shuffle) ?>
    </div>
  </div>
</section>