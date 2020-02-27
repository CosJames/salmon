<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!--CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Custom style sheet-->
  <link rel="stylesheet" href="./css/style.css?v=<?php echo time() ?>">
  <!--Scripts-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body id="loginpage-bg">
    <div class="container-fluid text-center">
      <img src="\assets\images\Logo.svg">
    </div>
    <div class="container pt-4 text-center w-25 p-3">
          <h1 class="display-4">Login</h1>
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password">
            </div>
           </form>
           <button type="button" class="btn btn-light btn-block" id="btn-login">Login</button>
    </div>
</body>
