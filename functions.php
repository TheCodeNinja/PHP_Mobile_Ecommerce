<?php

// require MySQL Connection
require('database/DBController.php');
require('database/Products.php');

// create db connection object
$db = new DBController();

// fetch products
$products = new Products($db);

// print_r($products->getData());
