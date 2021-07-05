<!doctype html>
<html lang="en">
  <head>
    <title>Creator LOGIN page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <style>
        h1{
            font-family: 'Open Sans Condensed', sans-serif;
            font-size : 40px;
            
        }
        
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="card col-8 mx-auto mt-3 ">
                <div class="card-header mt-3">
                    <h1 class="text-info text-center">
                        ACOS - Creator Login - 
                    </h1>
                
                </div>
                <div class="card-body">
                <form action="acosAction.php" method="post">
                    <p class="display-5 text-info text-center">
                    Creator Name <br>
                    </p>
                    <input type="text" name="creater_name" class="form-control" required>
                    <br>
                    <p class="display-5 text-info text-center">
                    PASSWORD <br>
                    </p>
                    <input type="password" name="crepass" class="form-control" required>
                    <br>
                    <p class="text-center">
                    <input type="submit" name="crelogin" class="btn btn-info text-center col-4" value="Creater's LOGIN" >
                    </p>
                </form>

                <footer>
                    <a href="reCreater.php" class="text-info float-right">New Register as Creator</a>
                </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>