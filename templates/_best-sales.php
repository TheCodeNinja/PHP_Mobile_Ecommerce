<!-- Best Sales -->
<?php
  $products_shuffle = $products->getData();
  shuffle($products_shuffle);
?>

<section id="best-sales">
  <div class="container py-5">
    <h4 class="font-rubik font-size-20">Best Sale</h4>
    <hr>
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">
      <?php foreach($products_shuffle as $product) { ?>
        <div class="product-card py-2">
          <div class="product font-rale">
            <a href="<?php printf('%s?item_id=%s', 'product-details.php',  $product['item_id']); ?>">
              <img src="<?php echo $product['item_image'] ?? "./assets/products/1.png"; ?>" alt="product1" class="img-fluid">
            </a>
            <div class="text-center">
              <h6><?php echo $product['item_name'] ?? "Unknown"; ?></h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span><?php echo $product['item_price'] ?? '0'; ?></span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>