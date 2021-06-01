<!-- Shopping cart section  -->
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
      $deletedrecord = $cart->deleteCartItem($_POST['item_id']);
    }

    if (isset($_POST['cart-submit'])) {
      $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
  }
?>

<section id="cart" class="py-3">
  <div class="container-fluid w-75">
    <h5 class="font-baloo font-size-20">Wishlist</h5>

    <div class="row">
      <!-- cart items -->
      <div class="col-sm-9">
        <?php
          foreach ($products->getData('wishlist') as $cartItem) :
            $product = $products->getProduct($cartItem['item_id']);
            // print_r($product);

            // store the new 'returned array' to 'subTotal'
            $subTotal[] = array_map(function($cartProduct) {
        ?>
        <div class="row border-top py-3 mt-3">
          <div class="col-sm-2">
            <img src="<?php echo $cartProduct['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
          </div>
          <div class="col-sm-8">
            <h5 class="font-baloo font-size-20"><?php echo $cartProduct['item_name'] ?? "Unknown"; ?></h5>
            <small>by <?php echo $cartProduct['item_brand'] ?? "Brand"; ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
            </div>
            <div class="qty d-flex pt-2">
              <form method="post">
                <input type="hidden" value="<?php echo $cartProduct['item_id'] ?? 0; ?>" name="item_id">
                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
              </form>
              <form method="post">
                <input type="hidden" value="<?php echo $cartProduct['item_id'] ?? 0; ?>" name="item_id">
                <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add to cart</button>
              </form>
            </div>
          </div>
          <div class="col-sm-2 text-right">
            <div class="font-size-20 text-danger font-baloo">
              $<span class="product_price" data-id="<?php echo $cartProduct['item_id'] ?? '0'; ?>">
                <?php echo $cartProduct['item_price'] ?? 0; ?>
              </span>
            </div>
          </div>
        </div>
        <?php
              return $cartProduct['item_price'];
            }, $product); // closing array_map function
            // print_r($subTotal);
          endforeach;
        ?>
      </div>
    </div>
  </div>
</section>