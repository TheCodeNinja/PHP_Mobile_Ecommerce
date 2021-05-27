<?php

class Cart {

  public $db = null;

  public function __construct(DBController $db) {
    // isset(): Check whether a variable is empty. Also check whether the variable is set/declared
    if (!isset($db->connection)) return null;
    $this->db = $db;
  }

  /**
   * DB handlers 
   */

  // insert into cart table
  public function insertToCart($params = null, $table = "cart") {
    if ($this->db->connection != null) {
      if ($params != null) {
        // "INSERT INTO cart(user_id) VALUES (0)"
        // get table columns & values
        // the implode() function returns a string from the elements of an array
        $columns = implode(',', array_keys($params));
        $values = implode(',' , array_values($params));

        // create sql query
        $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

        // execute query
        $result = $this->db->connection->query($query_string);
        return $result;
      }
    }
  }

  // delete cart item using cart item id
  public function deleteCartItem($item_id = null, $table = 'cart') {
    if ($item_id != null) {
      $result = $this->db->connection->query("DELETE FROM {$table} WHERE item_id={$item_id}");
      if ($result) {
        // reload page
        header("Location:" . $_SERVER['PHP_SELF']);
      }
      return $result;
    }
  }

  /**
   * Request handlers
   */

  // to get user_id and item_id and insert into cart table
  public function addToCart($userId, $itemId) {
    if (isset($userId) && isset($itemId)) {
      $params = array(
        "user_id" => $userId,
        "item_id" => $itemId
      );

      // insert data into cart
      $result = $this->insertToCart($params);
      if ($result) {
        // reload Page
        header("Location: " . $_SERVER['PHP_SELF']);
      }
    }
  }

  /**
   * Cart utils
   */

  // calculate sub total
  public function getSum($arr) {
    if (isset($arr)) {
      $sum = 0;
      foreach ($arr as $item) {
        $sum += floatval($item[0]);
      }
      return sprintf('%.2f' , $sum);
    }
  }


}