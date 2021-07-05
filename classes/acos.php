<?php
    include "database.php";

    class acos extends Database{

        public function create_login($username,$password){
            $sql = "INSERT INTO login(username,password) VALUES ('$username','$password')";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                return TRUE;
            }else{
                die('ERROR: '.$this->conn->error);
            }
        }

        public function create_user($firstname,$lastname,$contact,$gender,$image,$comment){
            // $login_id = $this->conn->insert_id;
            // $target_dir = 'images/';
            // $target_file = $target_dir.basename($image);
            // $sql = "INSERT INTO users(first_name,last_name,contact,gender,login_id,image) VALUES ('$firstname','$lastname','$contact','$gender','$login_id','$image')";
            // $result = $this->conn->query($sql);
            // if($result ==TRUE){
            //     move_uploaded_file($_FILES['pr-image']['tmp_name'],$target_file);
            //     // header('location:read.php');
            //     header('location:login.php');
                
            // }else{
            //     die('ERROR: '.$this->conn->error);
            // }

            $login_id = $this->conn->insert_id;
            
            $target_dir = 'images/';
            $target_file = $target_dir.basename($image);
            $sql = "INSERT INTO users(first_name,last_name,contact,gender,login_id,image,comment) VALUES ('$firstname','$lastname','$contact','$gender','$login_id','$image','$comment')";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                move_uploaded_file($_FILES['pr-image']['tmp_name'],$target_file);
                header('location: login.php');
            }else{
                die('ERROR: '.$this->conn->error);
            }
        }

        
        public function login($username,$password){
            $sql = "SELECT * FROM `login` WHERE username = '$username' AND password = '$password'";
            $result = $this->conn->query($sql);
            if($result->num_rows ==1){ //num_rows -means number of 'rows- should be matched to the number of accounts 
                $row = $result->fetch_assoc(); //correctly get the data into database
                $_SESSION['login_id'] = $row['login_id'];
                $_SESSION['username'] = $row['username'];
                if($row['status'] =='U'){
                    header('location:dashboard.php');
                }else{
                    header('location: admin.php');
                }
            }else{
                die('ERROR* '.$this->conn->error);
            }
        }
        public function profile_photo($id,$photoName){
            // the folder that will hold the uploaded files
            $target_dir = 'images/';
            //basename() gets the file name.. returns a value of string since filename is letters.
            $target_file = $target_dir.basename($photoName);
            // $conn = connection();
            //a simple updating query for img
            $sql = "INSERT INTO Users SET image = '$photoName' WHERE login_id = '$id'";
            $result = $this->conn->query($sql);
        
            if($result == FALSE){
                echo "NO IMAGE";
            }else{
                //move uploaded files creates a copy of your picture and moving it inside the directory
                move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
                header('location:read.php');
            }
        
        
        }
        public function users($user_id){
            $sql = "SELECT * FROM users INNER JOIN login ON users.login_id = login.login_id WHERE users.user_id = '$user_id '";
            $result = $this->conn->query($sql);
            if($result->num_rows==1){ //show how many data 
                return $result->fetch_assoc();
            }else{
              return FALSE;
            }
            
        }
        public function create_crelogin($username,$crepass){
            $sql = "INSERT INTO crelogin(creater_name,crepass) VALUES ('$username','$crepass')";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                return TRUE;
            }else{
                die('ERROR: '.$this->conn->error);
            }
        }


        public function create_creater($creater,$cgenre,$pr_image,$comment){
            $crelogin_id = $this->conn->insert_id;
            $target_dir = 'images/';
            //basename() gets the file name.. returns a value of string since filename is letters.
            $target_file = $target_dir.basename($pr_image);
            // $conn = connection();
            $sql = "INSERT INTO creater(creater_name,genre,crelogin_id,pr_image,comment) VALUES ('$creater','$cgenre','$crelogin_id','$pr_image','$comment')";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                move_uploaded_file($_FILES['pr_image']['tmp_name'],$target_file);
                header('location:creLogin.php');
            }else{
                die('ERROR: '.$this->conn->error);
            }


            // $crelogin_id = $this->conn->insert_id;
            
            // $target_dir = 'images/';
            // $target_file = $target_dir.basename($pr_image);
            // $sql = "INSERT INTO product(product_name, price, genre, image, description,creater_id) VALUES ('$name','$price','$genre','$image','$explain','$creater_id')";
            // $result = $this->conn->query($sql);
            // if($result ==TRUE){
            //     move_uploaded_file($_FILES['pr-images']['tmp_name'],$target_file);
            //     header('location: Products.php');
            // }else{
            //     die('ERROR: '.$this->conn->error);
            // }
        }
        public function creator_Photo($id,$photoName){
            // the folder that will hold the uploaded files
            $target_dir = 'images/';
            //basename() gets the file name.. returns a value of string since filename is letters.
            $target_file = $target_dir.basename($photoName);
            // $conn = connection();
            //a simple updating query for img
            $sql = "INSERT INTO creater SET pr_image = '$photoName' WHERE crelogin_id = '$id'";
            $result = $this->conn->query($sql);
        
            if($result == FALSE){
                echo "ERROR:";
            }else{
                //move uploaded files creates a copy of your picture and moving it inside the directory
                move_uploaded_file($_FILES['pr_image']['tmp_name'],$target_file);
                header('location:read.php');
            }
        
        
        }
        public function crelogin($creater_name,$crepass){
            $sql = "SELECT * FROM crelogin WHERE creater_name = '$creater_name' AND crepass = '$crepass'";
            $result = $this->conn->query($sql);
            if($result->num_rows ==1){ //num_rows -means number of 'rows- should be matched to the number of accounts 
                $row = $result->fetch_assoc(); //correctly get the data into database
                // $_SESSION['crelogin_id'] = $row['crelogin_id'];
                $_SESSION['crelogin_id'] = $row['crelogin_id'];
                $_SESSION['creator_name'] = $row['creater_name'];
                if($row['status'] =='C'){
                    header('location:addProduct.php');
                }else{
                    header('location: admin.php');
                }
            }else{
                die('ERROR* '.$this->conn->error);
            }
        }
        public function creators($user_id){
            $sql = "SELECT * FROM creater INNER JOIN crelogin ON creater.crelogin_id = crelogin.crelogin_id WHERE creater.creater_id = '$user_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows==1){ //show how many data 
                return $result->fetch_assoc();
            }else{
              return FALSE;
            }
            
        }
        public function add_products($name,$price,$genre,$image,$explain){
            $creater_id = $_SESSION['crelogin_id'];
            
            $target_dir = 'images/';
            $target_file = $target_dir.basename($image);
            $sql = "INSERT INTO product(product_name, price, genre, image, description,creater_id) VALUES ('$name','$price','$genre','$image','$explain','$creater_id')";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                move_uploaded_file($_FILES['pr-images']['tmp_name'],$target_file);
                header('location: Products.php');
            }else{
                die('ERROR: '.$this->conn->error);
            }
        }
        public function show_products($id){
            $sql = "SELECT * FROM product WHERE creater_id = '$id'";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){ //show how many data 
                $row = array(); //$row include all data 
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
        }
        // public function uploadPhoto($id,$photoName){
        //     // the folder that will hold the uploaded files
        //     $target_dir = 'images/';
        //     //basename() gets the file name.. returns a value of string since filename is letters.
        //     $target_file = $target_dir.basename($photoName);
        //     // $conn = connection();
        //     //a simple updating query for img
        //     $sql = "INSERT INTO product SET image = '$photoName' WHERE crelogin_id = '$id'";
        //     $result = $conn->query($sql);
        
        //     if($result == FALSE){
        //         die('unable to upload photo'.$conn->connect_error);
        //     }else{
        //         //move uploaded files creates a copy of your picture and moving it inside the directory
        //         move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
        //         header('location:read.php');
        //     }
        
        
        // }
        public function select_genre($genre){
            $sql = "SELECT * FROM product INNER JOIN creater ON product.creater_id = creater.creater_id WHERE product.genre = '$genre'";
            $result = $this->conn->query($sql);
            if($result->num_rows >0){ //show how many data 
                $row = array(); //$row include all data 
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
        }
        public function add_to_cart($product_id,$user_id){
            $sql = "INSERT INTO cart(product_id,user_id)VALUES('$product_id','$user_id')";
                $result = $this->conn->query($sql);
                if($result ==TRUE){
                    header('location: cartpage.php');
                }else{
                    die('ERROR: '.$this->conn->error);
                }
            
        }
        public function get_cart_products($user_id){
            $sql = "SELECT * FROM cart 
            INNER JOIN product ON cart.product_id = product.product_id 
            INNER JOIN creater ON product.creater_id = creater.creater_id
            WHERE cart.user_id = '$user_id' AND cart.status='NOT PURCHASED'";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){ //show how many data 
                $row = array(); //$row include all data z
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
        }
        public function checkout($user_id,$item_id){
            $sql ="UPDATE cart SET status = 'PURCHASED' WHERE cart_id = $item_id AND user_id = '$user_id'";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                header('location: purchasehistory.php');
            }else{
                die('ERROR: '.$this->conn->error);
            }
        }
        public function finish_paying($user_id){
            $sql = "SELECT * FROM cart INNER JOIN product ON cart.product_id = product.product_id INNER JOIN creater ON product.creater_id = creater.creater_id WHERE user_id = '$user_id' AND cart.status = 'PURCHASED'";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){ //show how many data 
                $row = array(); //$row include all data z
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
        }
    //  public function edit_user($editname,$editimage,$editcomment,$user_id){
    //      $target_dir = 'images/';
    //      //basename() gets the file name.. returns a value of string since filename is letters.
    //      $target_file = $target_dir.basename($photoName);
    //      $sql = "UPDATE users, login INNER JOIN users ON users.login_id = login.login_id SET login.username = '$editname', users.image = '$editimage', users.comment = '$editcomment' WHERE users.login_id = '$user_id'";
    //      $result = $this->conn->query($sql);
    //      if($result == TRUE){
    //          header('location: profile.php');

    //      }else{
    //          echo "<div class= alert alert-danger> Profile coudn't update properly ;</div>";
    //      }
    //  }
        public function edit_photo($id,$photoName){
            // the folder that will hold the uploaded files
            // $target_dir = 'images/';
            // //basename() gets the file name.. returns a value of string since filename is letters.
            // $target_file = $target_dir.basename($photoName);
            // // $conn = connection();
            // //a simple updating query for img
            // $sql = "UPDATE users SET image = '$photoName' WHERE login_id = '$id'";
            // $result = $conn->query($sql);
        
            // if($result == FALSE){
            //     echo "NO IMAGE";
            // }else{
            //     //move uploaded files creates a copy of your picture and moving it inside the directory
            //     move_uploaded_file($_FILES['editimage']['tmp_name'],$target_file);
            // }
            $target_dir = 'images/';
            //basename() gets the file name.. returns a value of string since filename is letters.
            $target_file = $target_dir.basename($photoName);
            // $conn = connection();
            //a simple updating query for img
            $sql = "UPDATE users SET image = '$photoName' WHERE login_id = '$id'";
            $result = $this->conn->query($sql);
        
            if($result == FALSE){
                echo "NO IMAGE";
            }else{
                //move uploaded files creates a copy of your picture and moving it inside the directory
                move_uploaded_file($_FILES['editimage']['tmp_name'],$target_file);

                return TRUE;
            }
        }
        public function edit_user($comment,$user_id){
            // $sql = "UPDATE users SET comment = '$comment' WHERE login_id = '$user_id'";
            // $result = $this->conn->query($sql);
            // if($result ==TRUE){
            //     header('location: Profile.php');
            // }else{
            //     echo "<div class= alert alert-danger> Profile coudn't update properly ;</div>";
            // }
            $sql = "UPDATE users SET comment = '$comment' WHERE login_id = '$user_id'";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                header('location: Profile.php');
            }else{
                echo "<div class= alert alert-danger> Profile coudn't update properly ;</div>";
            }

        }
        public function edit_prPhoto($pr_image,$user_id){
            $target_dir = 'images/';
            //basename() gets the file name.. returns a value of string since filename is letters.
            $target_file = $target_dir.basename($pr_image);
            // $conn = connection();
            //a simple updating query for img
            $sql = "UPDATE creater SET pr_image = '$pr_image' WHERE crelogin_id = '$user_id'";
            $result = $this->conn->query($sql);
        
            if($result == FALSE){
                echo "NO IMAGE";
            }else{
                //move uploaded files creates a copy of your picture and moving it inside the directory
                move_uploaded_file($_FILES['edit_pr_image']['tmp_name'],$target_file);

                return TRUE;
            }
        }
        public function edit_creator($comment,$user_id){
            $sql = "UPDATE creater SET comment = '$comment' WHERE crelogin_id = '$user_id'";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                header('location: creProfile.php');
            }else{
                echo "<div class= alert alert-danger> Profile coudn't update properly ;</div>";
            }
        }
        public function check_users_buy(){
            $sql = "SELECT * FROM `cart` INNER JOIN product ON cart.product_id = product.product_id INNER JOIN users ON cart.user_id = users.user_id INNER JOIN creater ON product.creater_id = creater.creater_id GROUP BY users.user_id";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){ //show how many data 
                $row = array(); //$row include all data z
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
        }
        public function total_purchase($user_id){
            $sql = "SELECT SUM(product.price) AS total FROM cart INNER JOIN users ON cart.user_id = users.user_id INNER JOIN product ON cart.product_id = product.product_id WHERE users.user_id = '$user_id'";
            $result = $this->conn->query($sql);
            // if($result->num_rows>0){ //show how many data 
            //     $row = array(); //$row include all data z
            //     while($rows = $result->fetch_assoc()){ 
            //         $row[] = $rows;

            //     }
            //     return $row;
            // }else{
            //   return FALSE;
            // }

            return $result->fetch_assoc();
        }
        public function check_creator($user_id){
            $sql ="SELECT * FROM cart INNER JOIN product ON cart.product_id = product.product_id INNER JOIN creater ON product.creater_id = creater.creater_id GROUP BY creater.creater_id";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){ //show how many data 
                $row = array(); //$row include all data z
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
        }
        public function check_products(){
            $sql = "SELECT * FROM `cart` INNER JOIN product ON cart.product_id = product.product_id INNER JOIN creater ON product.creater_id = creater.creater_id WHERE cart.status = 'PURCHASED' GROUP BY product.product_name";
            $sql2 = "SELECT * FROM `cart` INNER JOIN product ON cart.product_id = product.product_id INNER JOIN creater ON product.creater_id = creater.creater_id WHERE cart.status = 'PURCHASED' GROUP BY product.product_name";
               
            
            $result = $this->conn->query($sql);
            if($result->num_rows>0){ //show how many data 
                $row = array(); //$row include all data z
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
        }
        public function number_purchase($id){
            $sql = "SELECT * FROM cart WHERE status = 'PURCHASED' AND product_id = '$id'";
            $result = $this->conn->query($sql);
           
            $result = $this->conn->query($sql);
            if($result->num_rows>0){ //show how many data 
                $row = array(); //$row include all data z
                while($rows = $result->fetch_assoc()){ 
                    $row[] = $rows;
                }
                return $row;
            }else{
              return FALSE;
            }
           


            
         
        }
        // public function count_product_purchases($product){
        //     $sql = "SELECT * FROM cart INNER JOIN product ON cart.product_id = product.product_id WHERE product.product_name = '$product'";
        // }
      
    }

    // 1. create functionality to change the pp
    // 2. create fucntionality to change the password only
    // 3. create a fucntionality to change the details 
        // firstname, lastname,number, address
        // authencation
