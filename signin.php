<?php

if (isset($_POST['signin'])) {
  $name=$_POST['name'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $username=$_POST['username'];
  $password=$_POST['Password'];

  $sql="INSERT INTO `users`(`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `type`)
  VALUES ('','','$name','$address','$contact','$username','$password','')";


$query=mysqli_query($conn,$sql);
if ($query) {
echo"successful";
}else{
    echo"unsuccessful";
}


}

?>
