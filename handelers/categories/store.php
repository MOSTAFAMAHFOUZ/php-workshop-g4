<?php 
session_start();
include '../../inc/config.php';
include '../../inc/conn.php';
include '../../inc/validation.php';
$_SESSION['errors'] = [];
if(isset($_POST['cat_name'])){

    $cat_name = sanStr($_POST['cat_name']);
    if(!reqVal($cat_name)){
        $_SESSION['errors'][] =  "please insert a valid name";
    }


    if(empty($_SESSION['errors'])){
        $sql = "INSERT INTO categories(`name`) VALUES('$cat_name') ";
        $result = mysqli_query($conn,$sql);

        if(mysqli_affected_rows($conn))
        {
            echo "data inseted succefully";
        }else{
            echo "error";
        }
    }else{
        header("location:".URL."categories/add.php");
    }
    



}