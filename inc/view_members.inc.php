<?php

class ViewMembers extends Members {

  public function showAllMembers() {
    $table = $this->getAllMembers();
    foreach($table as $row) {

      switch ($row['Status']) {
        case 0:
          echo '<div class="card my-3 member-card" data-toggle="modal" data-target="#modal"
          data-name="'.$row['Name'].'" data-card="'.$row['CardNo'].'" data-status="'.$row['Status'].'"
          data-paged="'.$row['Paged'].'"> 
          <img class="card-img-top" src="'.$row['Photo'].'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title mb-1 teacher-name">'.$row['Name'].'</h5>
                <p class="card-text"> <span class="status-indicator status-indicator-available">&#xf111</span> Available</p>
            </div>
          </div>';
        break;
        case 1:
          echo '<div class="card my-3 member-card" data-toggle="modal" data-target="#modal"
          data-name="'.$row['Name'].'" data-card="'.$row['CardNo'].'" data-status="'.$row['Status'].'"
          data-paged="'.$row['Paged'].'"> 
          <img class="card-img-top" src="'.$row['Photo'].'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title mb-1 teacher-name">'.$row['Name'].'</h5>
                <p class="card-text"> <span class="status-indicator status-indicator-onConsultation">&#xf111</span> On Consultation</p>
            </div>
          </div>';        
        break;
        
        case 2:
          echo '<div class="card my-3 member-card" data-toggle="modal" data-target="#modal"
          data-name="'.$row['Name'].'" data-card="'.$row['CardNo'].'" data-status="'.$row['Status'].'"
          data-paged="'.$row['Paged'].'"> 
          <img class="card-img-top" src="'.$row['Photo'].'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title mb-1 teacher-name">'.$row['Name'].'</h5>
                <p class="card-text"> <span class="status-indicator status-indicator-busy">&#xf111</span> Busy</p>
            </div>
          </div>';  
        break;
        
        case 3:
          echo '<div class="card my-3 member-card" data-toggle="modal" data-target="#modal"
            data-name="'.$row['Name'].'" data-card="'.$row['CardNo'].'" data-status="'.$row['Status'].'"
            data-paged="'.$row['Paged'].'"> 
            <img class="card-img-top" src="'.$row['Photo'].'" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title mb-1 teacher-name">'.$row['Name'].'</h5>
                  <p class="card-text"> <span class="status-indicator status-indicator-unavailable">&#xf111</span> Unavailable</p>
              </div>
            </div>';
        break;

        default:

      }
      
    }
  }
}