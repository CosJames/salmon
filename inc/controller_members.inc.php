<?php

class Members extends Dbh {

  protected function getAllMembers() {
    $stmt = "SELECT * FROM members ORDER BY Name ASC";
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