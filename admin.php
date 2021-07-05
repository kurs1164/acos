<?php
    include "acosAction.php";
    // $total = 0;

    $cart_check = $acosobj->check_users_buy($_SESSION['login_id']);
    $check_creator = $acosobj->check_creator($_SESSION['login_id']);
    $check_products = $acosobj->check_products();

  // echo "<pre>";
  //     print_r($check_products);
  //   echo "</pre>";
  //   die();
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
       
      <table class="table bg-dark text-light mx-auto m-5 w-75">
        <thead class="text-center">
        <h2 class="text-center mt-5">USER's DATA</h2>
            <th>USER</th>
            <th>GENDER</th>
            <th>TOTAL PURCHASED</th>
            <th>DELETE BUTTON</th>
        </thead>
        <tbody class="text-center">
        <?php foreach($cart_check as $row){  ?>
        <tr>
            <?php
                $total = $acosobj->total_purchase($row['user_id']); 
                
              
            ?>
            
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td><?php echo $total['total'] ?></td>
            <td><button type="submit" class="btn btn-danger">BANN</button></td>
            </tr>
        <?php } ?>
        </tbody>
      </table>

      <table class="table bg-dark text-light mx-auto m-5 w-75">
        <thead class="text-center">
        <h2 class="text-center mt-5">CREATOR's DATA</h2>
            <th>CREATOR</th>
            <th>GENRE</th>
            <th>TOTAL PRODUCTS</th>
            <th>DELETE BUTTON</th>
        </thead>
        <tbody class="text-center">
        <?php foreach($check_creator as $row){  ?>
        <tr>
            <?php
              // $total = $acosobj->total_purchase($row['user_id']); 
              $productlist = $acosobj->show_products($_SESSION['login_id']);
              
            ?>
            
            <td><?php echo $row['creater_name'] ?></td>
            <td><?php echo $row['genre'] ?></td>
            <td><?php echo count($productlist) ?></td>
            <td><button type="submit" class="btn btn-danger">BANN</button></td>
            </tr>
        <?php } ?>
        </tbody>
      </table>

      <table class="table bg-dark text-light mx-auto m-5 w-75">
        <thead class="text-center">
        <h2 class="text-center mt-5">PURCHASE DATA</h2>
            <th>PRODUCT NAME</th>
            <th>GENRE</th>
            <th>CREATED BY </th>
            <th>TOTAL PURCHASE</th>
            <th>DELETE BUTTON</th>
        </thead>
        <tbody class="text-center">
        <?php foreach($check_products as $row){  ?>
        <tr>
            <?php
              // $total = $acosobj->total_purchase($row['user_id']); 
              // $productlist = $acosobj->show_products($_SESSION['login_id']);
              // $number_purchase = $acosobj->number_purchase($_SESSION['login_id']);
              
            ?>
            <?php //echo $row['product_id'] ?>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo $row['genre'] ?></td>
            <td><?php echo $row['creater_name'] ?></td>
            <td><?php echo $acosobj->number_purchase($row['product_id']); ?></td>
            <td><button type="submit" class="btn btn-danger">BANN</button></td>
            </tr>
        <?php } ?>
        </tbody>
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>