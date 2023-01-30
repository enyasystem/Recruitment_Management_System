<?php
include 'db_connect.php';


 $name=$_POST['name'];
 $password=$_POST['password'];
 $username=$_POST['username'];
 
 $query=mysqli_query($conn,"INSERT INTO `admin`(`id`, `name`, `username`, `password`)  
 VALUES ('','$name','$username','$password')");
 if($query){
    echo"success";
 }else{
    echo"unsuccessful";
 }


?>



