<?php

  require_once 'db.inc.php';

class Transaction extends Dbh {
  
  public function createTransaction($studentNo, $memberCardNo) {

    $conn = $this->connect();
    $sql = "INSERT INTO `transactions` (`student`, `member`) VALUES (:student, :member);
    UPDATE members SET Paged = 1 WHERE CardNo = $memberCardNo;";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':student', $studentNo);
    $statement->bindValue(':member', $memberCardNo);
    $statement->execute();
    
  }
}