<?php
    include "acosAction.php";
    $_SESSION['genre']= "MOVIE";
    // $productlist = $acosobj->show_products($_SESSION['crelogin_id']);
    $genre = $acosobj->select_genre($_SESSION['genre']);
    // $productlist = $acosobj->show_products($_SESSION['login_id']);
    // foreach($productlist as $rows){
    //     $image = $rows['image'];
    // }
    // echo $genre[0]['price'];
    // echo $_SESSION['genre'];
    // print_r($genre);
    // die();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>ACOS NOVEL PAGE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" herf="fontawesome/css/all.css">
    <style>
      img{
          width: 300px;
          height: 300px;
        }
      /* .logo{
          width: 160px;
          height: 160px;
      } */
      h1{
        font-family: 'Rajdhani', sans-serif;
        font-size: 60px;
      }
      .movietag{
        width: 250px;
        height: 250px;
      }
      .noveltag{
        width: 250px;
        height: 250px;
      }
      .comictag{
        width: 250px;
        height: 250px;
      }
      .animationtag{
        width: 250px;
        height: 250px;
      }
      .img-fluid{
          width: 100px;
          height: 100px;
      }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="purchasehistory.php"><img src="images/logo.png" alt="logo" style="width: 40px; height: 40px;"></a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link text-light fab fa-home:" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="creLogin.php">SALE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light fas fa-user" href="dashboard.php?page=" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCOUNT</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" href="reCreater.php">TO BE NEW CREATER</a>
          <a class="dropdown-item" href="Profile.php">Profile</a>
        </div>
      </li>
    </ul>
        <form class="form-inline my-2 my-lg-0" action="acosAction.php" method="post">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
        </form>
  </div>
</nav>

<div class="container-fuid">
        <div class="jumbotron w-80" style="background-color: rgb(30,43,43)">
            <h1 class="text-center text-light">
                Novel Online Page
            </h1>
            <p class="text-light lead text-center">
                You can purchase Novels you have interest!!
            </p>
        </div>
</div>

<div class="container">
      <table class="table table-bordered">
        <thead>
            <th></th>
            <th>Novel Name</th>
            <th>Creator Name</th>
            <th>Price</th>
            <th>About</th>
            <th></th>
        
        </thead>

        <tbody>
                <?php foreach($genre as $row){ 
                     $image = $row['image']; ?>
                    <tr>
                        <td><img src="images/<?php echo $image ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><?php echo $row['creater_name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                      
                        <td><form action="acosAction.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['login_id'] ?>"><button type="submit" name="purchase" class="btn btn-dark">PURCHASE</button></form></td>
                        
                    </tr>
                <?php } ?>
        </tbody>
      </table>

</div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>