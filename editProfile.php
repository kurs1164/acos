<!doctype html>
<html lang="en">
  <head>
    <title>Users LOGIN Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <style>
        h1{
            font-family: 'Open Sans Condensed', sans-serif;
            font-size : 40px;
            
        }
        
    </style>
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="card w-75 mx-auto mt-3 mb-5 bg-secondary">
                <div class="card-header">
                    <h1 class="text-warning text-center">
                        ACOS - EDIT PROFILE - 
                    </h1>
                
                </div>
                <div class="card-body">
                <form action="acosAction.php" method="post" enctype="multipart/form-data">
                <p class="text-warning text-center">
                    EDIT PROFILE IMAGE <br>
                    <input type="file" name="editimage" class=mt-3>
                    <br>
                    <br>
                    EDIT INTRODUCTION <br>
                    <input type="text" name="editcomment" class="mt-3 form-control">
                
                    <input type="submit" name="edit" value="EDIT PROFILE" class="btn btn-warning mt-4">
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