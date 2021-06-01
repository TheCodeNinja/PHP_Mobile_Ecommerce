<?php

require ('../database/DBController.php');
require ('../database/Products.php');

// DBController object
$db = new DBController();

// Product object
$products = new Products($db);

if (isset($_POST['itemId'])){
  $result = $products->getProduct($_POST['itemId']);
  echo json_encode($result);
}