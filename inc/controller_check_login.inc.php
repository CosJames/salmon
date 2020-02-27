<?php

class LoginHelper extends Dbh {

  public function verify($username, $password) {
    $stmt = "SELECT * FROM admin WHERE username = '$username'";
    $result = $this->connect()->query($stmt);
    $numRows = $result->rowCount();
    if ($numRows > 0) {
      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if ($username == $row['username']) {
          echo 'Correct username!';
          if (password_verify($password, $row['password'])) {
            echo 'Correct password!';
          } else {
            echo 'Incorrect password!';
          }
        }
      }
    } else {
      echo 'Log in error. Check your username or password.';
    }
  }

}