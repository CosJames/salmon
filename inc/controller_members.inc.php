<?php

class Members extends Dbh {

  protected function getAllMembers() {
    $stmt = "SELECT * FROM members ORDER BY Status ASC, Name ASC";
    $result = $this->connect()->query($stmt);
    $numRows = $result->rowCount();

    if ($numRows > 0) {
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }
    }

    return $data;
  }

  protected function selectMember($cardNo) {
    $stmt = "SELECT * FROM members WHERE CardNo = ".$cardNo.";";
    $result = $this->connect()->query($stmt);
    $numRows = $result->rowCount();

    if ($numRows > 0) {
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }
    }

    return $data;
  }
      
}