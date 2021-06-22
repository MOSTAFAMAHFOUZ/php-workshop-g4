<?php 

$conn = mysqli_connect("localhost","root","","product_management3");

if(!$conn){
    die("error : ".mysqli_connect_error());
}