<?php
include_once "../inc/controller_transaction.inc.php";

  $dbServerName = "localhost";
  $dbUsername = "salmon_connection";
  $dbPassword = "i8R6WFmkKDyv5pSH";
  $dbName = "salmon";

  $conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
  $items = $conn->query("SELECT * FROM `transactions` WHERE `id` > $start");
  while ($row = $items->fetch_assoc()) {
    $result['items'][] = $row;
  }

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json");

  echo json_encode($result);