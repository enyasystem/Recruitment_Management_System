<?php
$_SESSION['message']='';
$host = 'localhost';
$username = 'root';
$password = 'enyaelvis';
$dbconnect = 'recruitment_db';

$conn = mysqli_connect($host, $username, $password, $dbconnect);

if (!$conn) {
    echo "no connection detected";
} 
if (isset($_GET['submit'])) {
    $username1 = $_GET['username'];
    $password = $_GET['Password'];

    $sql = "SELECT * FROM `users` WHERE `password`='$password' AND  `username`='$username1'";
    $query = mysqli_query($conn, $sql);
    
    if ($query || mysqli_num_rows($query) > 0) {
        while ($row =mysqli_fetch_assoc($query)) {

            $_SESSION['username'] = $row['username'];
            $_SESSION['doctor_id'] = $row['doctor_id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['contact'] = $row['contact'];
            

            header("location:index.php");
            $_SESSION['message']='error';


        }

    }else {
        echo"incorrect";
    }



}
?>
