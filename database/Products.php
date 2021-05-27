<?php

class Products {

  // property
  public $db = null;

  // constructor
  public function __construct(DBController $db) {
    if (!isset($db->connection)) return null;
    $this->db = $db;
  }

  /**
   * DB handlers
   */

  // to fetch products
  public function getData($table = 'product') {
    $result = $this->db->connection->query("SELECT * FROM {$table}");

    $resultArray = array();

    // fetch product one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $resultArray[] = $item;
    }

    return $resultArray;
  }

  // get product by id
  public function getProduct($item_id=null, $table='product') {
    if (isset($item_id)) {
      $result = $this->db->connection->query("SELECT * FROM {$table} WHERE item_id={$item_id}");

      $resultArray = array();

      // fetch product data one by one
      while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
      }

      return $resultArray;
    }
  }
}