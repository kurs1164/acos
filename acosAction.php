<?php
    include "classes/acos.php";
    $acosobj = new acos;
    

    if(isset($_POST['submit'])){
        $firstname = $_POST['first-name'];
        $lastname = $_POST['last-name'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $pr_image = $_FILES['pr-image']['name'];
        $comment = $_POST['comment'];

        $validate = $acosobj->create_login($username,$password);

        if($validate ==TRUE){
            $acosobj->create_user($firstname,$lastname,$contact,$gender,$pr_image,$comment);

        }else{
            echo "REGISTRATION FAILED";
        }
    }else if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['pass']);
       

        $acosobj->login($username,$password);
        // }else if(isset($_POST['select'])){
        //     $genre = $_POST['genre'];

        //    if ($genre =='movie'){
        //        header('location: moviepage.php');
        //    }else if ($genre =='novel'){
        //        header('location: novelpage.php');
        //    }else if($genre =='comics'){
        //        header('location: comicspage.php');
        //    }else if($genre =='anime'){
        //        header('location: animationpage.php');
        //    }
    }else if(isset($_POST['creregister'])){
        $Cgenre = $_POST['Cgenre'];
        $username = $_POST['creater'];
        $cpass = md5($_POST['crepass']);
        $pr_image = $_FILES['pr_image']['name'];
        $comment = $_POST['comment'];

        $validate = $acosobj->create_crelogin($username,$cpass);

        if($validate ==TRUE){
            $acosobj->create_creater($username,$Cgenre,$pr_image,$comment);

        }else{
            echo "REGISTRATION FAILED";
        }

    }else if (isset($_POST['crelogin'])){
        $creater_name = $_POST['creater_name'];
        $crepass = md5($_POST['crepass']);

        // echo "good";
        $acosobj->crelogin($creater_name,$crepass);
    }else if (isset($_POST['search'])){
        $search = $_POST['search'];

        $_SESSION['search'] = $search;
        header('location: searchedResult.php');
    }else if(isset($_POST['upload'])){
        $product = $_POST['product-name'];
        $price = $_POST['price'];
        $genre = $_POST['genre'];
        $filename = $_FILES['pr-images']['name'];
        $explain = $_POST['desc'];



        $acosobj->add_products($product,$price,$genre,$filename,$explain);
        // $acosobj->uploadPhoto($filename);
    }else if (isset($_POST['purchase'])){
        $product_id = $_POST['product_id'];
        $user_id = $_SESSION['login_id'];

        $acosobj->add_to_cart($product_id,$user_id);
    }else if (isset($_POST['paying'])){
        // $cart_items = $_SESSION['cart_products'];
        // $user_id = $_SESSION['login_id'];
         $cart_id = $_POST['cart_id'];
        // $_SESSION['login_id'];
    //    die();
        $acosobj->checkout($_SESSION['login_id'],$cart_id);

        
           

        // foreach($_SESSION['cart_products'] as $row){
        //     $acosobj->checkout($row['user_id'],$row['cart_id']);
        // }

        
    }else if(isset($_POST['edit'])){
        $editimage = $_FILES['editimage']['name'];
        $editcomment = $_POST['editcomment'];

        // echo $editcomment;

        // $acosobj->edit_user($_SESSION['login_id'],$editcomment);
        // $acosobj->edit_photo($_SESSION['login_id'],$editimage);

         if( $acosobj->edit_photo($_SESSION['login_id'],$editimage) == TRUE){
            $acosobj->edit_user($editcomment,$_SESSION['login_id']);
        }else{
            echo "edit photo not working";
        }
    }else if(isset($_POST['edit_pr'])){
        $edit_pr_image = $_FILES['edit_pr_image']['name'];
        $edit_comment = $_POST['edit_comment'];
         
        if($acosobj->edit_prPhoto($edit_pr_image,$_SESSION['crelogin_id']) == TRUE){
            $acosobj->edit_creator($edit_comment,$_SESSION['crelogin_id']);
        }else{
            echo "edit photo not working";
        }
    }


?>