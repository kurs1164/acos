<!doctype html>
<html lang="en">
  <head>
    <title>REGISTER OF CREATOR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        *{
        font-family: 'Rajdhani', sans-serif;
      }

      .display-5{
          font-size: 32px;
      }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="card mx-auto mt-3 w-50 mb-3">
            <div class="card-header bg-info">
                <h1 class="display-5 text-light text-center">
                    REGISTRER TO BE A CREATOR
                </h1>
            </div>
        
            <div class="card-body bg-gray text-center">
                <form action="acosAction.php" method="post" enctype="multipart/form-data">
                <p class="text-warning">
                <p class="text-warning">
                    Enter username <br>
                        <input type="text" name="creater" class="mt-3 form-control">
                    <br><br>
                    UPLOAD Your Profile Image <br>
                        <input type="file" name="pr_image" class="mt-3">
                    <br><br>
                    Select Your Genre 
                    <br><br>
                  </p>
                        <p class="text-dark">
                        <input type="radio" name="Cgenre" value="movie">Movie
                        <input type="radio" name="Cgenre" value="novel">Novel 
                        <input type="radio" name="Cgenre" value="comics">Comic 
                        <input type="radio" name="Cgenre" value="anime">Animation 
                        </p>
                    <br><br>
                  <p class="text-warning">
                    Let's Introduce Your self!! <br>
                      <input type="text" name="comment" class="mt-3 form-control">
                    <br><br>
                    Enter your password <br>
                        <input type="password" name="crepass" class="mt-3 form-control">
                    <br><br>
                    <input type="submit" name="creregister" value="Register" class="btn btn-warning">
                  </p>
                </form>
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