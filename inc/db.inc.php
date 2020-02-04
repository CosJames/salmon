<?php

class Dbh {

  private $dbServerName;
  private $dbUsername;
  private $dbPassword;
  private $dbName;
  private $charset;

  protected function connect() {
    $this->dbServerName = "localhost";
    $this->dbUsername = "salmon_connection";
    $this->dbPassword = "i8R6WFmkKDyv5pSH";
    $this->dbName = "salmon";
    $this->charset = "utf8mb4";

    $dsn = "mysql:host={$this->dbServerName};dbname={$this->dbName};charset={$this->charset}";

    try {
      $conn = new PDO($dsn, $this->dbUsername, $this->dbPassword);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo "Connection failed: {$e->getMessage()}";
    }
    
  }

  protected static function countConnect() {
    //return total connections
  }

}

