<?php

class ViewMembers extends Members {

  public function showAllMembers() {
    $table = $this->getAllMembers();
    foreach($table as $row) {
      echo '<div class="card my-3" data-toggle="modal" data-target="#modal"> 
                <img class="card-img-top" src="assets/images/test/81298920_1333975186773663_5755750261087797248_o.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1 teacher-name">'.$row['Name'].'</h5>
                    <p class="card-text">Available</p>
                </div>
            </div>';
    }
  }
}