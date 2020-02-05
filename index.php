<?php
  include_once 'loader.php';
  session_start();
?>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time() ?>">
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    
    <title>Salmon</title>
</head>
<body>


    <!--The container wherein he title and searchbox is located-->
    <nav class="container-fluid d-flex flex-column text-center bg-light pt-4 sticky-top">
        <h1 class="display-3 text-center" id="title" href="#">Salmon</h1>
        <form class="form-inline mx-auto">
            <input id="searchbox" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <!--Content Container-->
    <div class="container">
        <!--Alert for telling the user the request has been sent-->
        <!-- Cos joke lang tama aka maganda kung ilagay sa container-->
        <div class="container position-fixed" id="alerts-container">
            
        </div>
        <!-- The Container wherein the teacher is listed-->
        <div class="container d-grid position-relative" id="list">
            <!-- Test ko lang-->
            <?php
              $m = new ViewMembers();
              $m->showAllMembers();
            ?>
        </div>
        
    </div>
    <!--Modal-->
    
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" data-dismiss="modal" id="modal-ok">Save changes</button>
            </div>
          </div>
        </div>
    </div>
</body> 
</html>