<?php

// require MySQL Connection
require('database/DBController.php');
require('database/Products.php');
require ('database/Cart.php');

// create db connection object
$db = new DBController();

// fetch products
$products = new Products($db);

$cart = new Cart($db);


// print_r($products->getData());

// $arr = array(
//   "user_id" => 1,
//   "item_id" => 4
// );

// $Cart->insertToCart($arr);
