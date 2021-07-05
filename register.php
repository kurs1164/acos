<?php 
  include "acosAction.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>ACOS - NEW ACCOUNT REGISTRER </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    
    <style>
      body{
        background-color: grey;
      }

      
        .card-header{
            font-family: 'Open Sans Condensed', sans-serif;
            font-size : 40px;
            
        }
        
    
    
    </style>
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-8 card text-center mx-auto mt-3">
              <div class="card-header text-success">
                NEW ACCOUNT REGISTER
              </div>

              <div class="card-body mb-3">
              <form action="acosAction.php" method="post" enctype="multipart/form-data">
                <p class="display-5 text-success text-center">
                  PROFILE IMAGE <br>
                  <input type="file" name="pr-image"> 
                </p>             
                <p class="mt-3 text-success">
                Enter Your First Name <br>
                <input type="text" name="first-name" class="form-control" required>
                <br>
                Enter Your Last Name <br>
                <input type="text" name="last-name" class="form-control" required>
                
                </p>

                <p class="mt-3 text-success">
                Enter Your Contact Number <br>
                  <input type="tell" name="contact" class="form-control" required>
                </p>

                <p class="text-success">
                Select Your Gender <br>
                </p>
                <p class="text-dark">
                <input type="radio" name="gender" value="male" requoired>Male
                <input type="radio" name="gender" value="female" required>Female
                <input type="radio" name="gender" value="none" required>None
                </p>

                <p class="mt-3 text-success">
                Enter Your User Name (LOGIN ID) <br>
                <input type="text" name="username" class="form-control" required>
                <br>
                </p>

                <p class="mt-3 text-success"> 
                  PASSWORD
                  <input type="password" name="password" class="form-control" required>
                  <br>
                </p>
                <p class="mt-3 text-success">
                  SOME COMMENT <br>
                  <input type="text" name="comment" class="form-control">
                </p>
               

               

                <p class="text-center mt-3">
                  <input type="submit" name="submit" class="btn btn-success w-25" value="REGISTER">
                </p>
              </form>
              </div>
            </div>
        </div>
      
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>