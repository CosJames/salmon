<?php

class Students extends Dbh {

  protected function selectStudent($studentId) {
    $stmt = "SELECT * FROM studentsdb WHERE REGION = ".$studentId.";";
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