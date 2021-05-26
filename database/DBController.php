<?php

class DBController {

  // Database Connection Properties
  protected $host = 'localhost';
  protected $user = 'root';
  protected $password = 'pass1234';
  protected $database = "php_mobile_ecommerce";

  // connection property
  public $connection = null;

  // Constructor
  public function __construct() {
    $this->connection = mysqli_connect(
      $this->host, $this->user, $this->password, $this->database
    );  
    if ($this->connection->connect_error){
      echo "Fail " . $this->connection->connect_error;
    }
    // echo "Connection successful";
  }

  // close db connection
  public function __destruct() {
    $this->closeConnection();
  }

  protected function closeConnection() {
    if ($this->connection != null) {
      $this->connection->close();
      $this->connection = null;
    }
  }
}

// for testing connection
// $db = new DBController();