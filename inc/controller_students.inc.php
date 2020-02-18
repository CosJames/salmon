<?php

class Students extends Dbh {

  protected function getAllStudents() {
    $stmt = "SELECT * FROM studentsdb ORDER BY Name ASC";
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