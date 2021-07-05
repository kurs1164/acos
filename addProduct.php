<?php

include 'acosAction.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <title>ACOS Posting Products</title>
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
      .explain{
        width: 200px;
        height: 300px;
      }
      input[type="text"][name="desc"]{
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
        <a class="nav-link text-light" href="Products.php">SALE</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light fas fa-user" href="dashboard.php?page=" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACCOUNT</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" href="reCreater.php">TO BE NEW CREATER</a>
          <a class="dropdown-item" href="creProfile.php">Profile</a>
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
        <div class="jumbotron w-80" style="background-color: rgb(30,43,123)">
            <h1 class="text-center text-light">
                Adding Your Creative Products 
            </h1>
            <p class="text-light lead text-center">
                You're moving up the road to professional !!
            </p>
        </div>
</div>
<div class="container">
      <div class="row">
        <div class="card w-50 mt-3 mx-auto text-light text-center mb-5">
            <div class="card-header bg-dark">
                <h2 class="display-5">
                    Trying to post products
                </h2>
            </div>
            <div class="card-body" style="background-color: rgb(30,43,123);">
            <form action="acosAction.php" method="post" enctype="multipart/form-data">
            Enter your product name: <br>
                <input type="text" name="product-name" class="form-control" placeholder="PRODUCT NAME" required>
            <br>
            <br>
            Select Product's Genre <br><br>
                <input type="radio" name="genre" value="MOVIE" class="ml-3" required>MOVIE
                <input type="radio" name="genre" value="NOVEL" class="ml-3" required>NOVEL
                <input type="radio" name="genre" value="COMIC" class="ml-3" required>COMIC
                <input type="radio" name="genre" value="ANIMATION" class="ml-3" required>ANIMATION
            <br>
            <br>
            Decide your product's price 
                <input type="number" name="price" class="form-control mt-3" placeholder="￥*****" required>
            <br>
            <br>
            Upload Your product's image <br>
                <input type="file" name="pr-images" class="mt-3" required> 
            <br>
            <br>
            Explain About Your Products <br>
                <input type="text" name="desc" class="mt-3 form-control">
              <br>
              <br>
                <input type="submit" name="upload" value="POST" class="btn btn-block btn-warning">
            </form>
            </div>
        </div>
       
        
        
      </div>
  <!-- <div class="card">
      <div class="card-header">
        <h2 class="display-4">
            WELCOME :
            SELECT YOUR FAVORITE GENRE !!
        </h2>
      </div>
      <div class="card-body">
        <form action="acosAction.php" method="post">
          <select name="genre" id="">
            <option value="" hidden>YOUR FAVORITE GENRE</option>
            <option value="movie">Movie</option>
            <option value="novel">Novel</option>
            <option value="comics">Comics</option>
            <option value="anime">Animation</option>

          </select>
          <p class="mt-3">
          <input type="submit" name="select" value="SELECT GENRE" class="btn btn-warning">
          </p>
        </form>
      </div>
  </div> -->


</div>



<?php
  // $page = isset($_GET['page']) ? $_GET['page']:1;
  // if($page ==1){
  //     include "homepage.php";
  // }else if($page ==2){
  //     include "Addpost.php";
  // }else if($page ==4){
  //     include "regCreater.php";
  // }else if($page ==5){
  //     include "profile.php";
  // }



?>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>