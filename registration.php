<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./css/style1.css"> -->
    </head>

    
    <!-- <body>
        <h1 class="text-center text-info p-3">Job Seek</h1>
        <div class="bg-info py-4">
            <h2 class="text-center">Register Account</h2>
            <div class="container text-center">
                <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="text" 
                        placeholder="Enter your username" required="required" name="username">
                    </div>
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="text" 
                        placeholder="Enter your mobile number" required="required" name="mobile">
                    </div>
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="password" 
                        placeholder="Password" required="required" name="password">
                    </div>
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="password" 
                        placeholder="Confirm your password" required="required" name="cpassword">
                    </div>
                     <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="date" 
                        placeholder="Date of Birth" required="required" name="date">
                    </div> 
                    <div class="mb-3">
                        <input class="form-control w-50 m-auto" type="file" 
                        placeholder="Select Image" required="required" name="photo">
                    </div>
                    <div class="mb-3">
                        <select name="std" class="form-select w-50 m-auto">
                            <option value="group">Group</option>
                            <option value="voter">Voter</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success my-4">Register</button>
                    <p>Already Have an Account <a href="login.php" class="text-white">Login Here</a> </p>
                </form>
            </div>
        </div>
       
    </body> -->

    
    <h1 class="text-center text-info p-3">Job Seek</h1>
    <div class="py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="text-center">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="inputPassword2" class="visually-hidden">Name</label>
                    <input class="form-control m-auto w-50 m-auto" type="text" name="name" placeholder="Name" required="required">
                </div>
                <div class="mb-3">
                    <label for="inputPassword2" class="visually-hidden">Username</label>
                    <input class="form-control w-50 m-auto" type="text" name="username" placeholder="Username" required="required">
                </div>
                <div class="mb-3">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" class="form-control w-50 m-auto" id="inputPassword2" name="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <label for="name" class="visually-hidden">name</label>
                    <input type="text" class="form-control w-50 m-auto" id="inputPassword2" name="address" placeholder="Address" required="required">
                </div>
                <div class="mb-3">
                    <label for="contact" class="visually-hidden">Contact</label>
                    <input type="text" class="form-control w-50 m-auto" id="inputPassword2" name="contact" placeholder="Contact" required="required">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3 " name="signin">Sign In</button>
                    <p>Already Have an Account? <a href="login.php" class="text-bold">Log In Here</a> </p>
                </div>
            </form>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>

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
if (isset($_GET['Confirm'])) {
    $username1 = $_GET['username'];
    $password = $_GET['password'];

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






if (isset($_POST['signin'])) {
  $name=$_POST['name'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="INSERT INTO `users`(`id`, `doctor_id`, `name`, `address`, `contact`, `username`, `password`, `type`)
  VALUES ('','','$name','$address','$contact','$username','$password','')";


$query=mysqli_query($conn,$sql);
if ($query) {
    echo '<script>
    alert ("Account successfully created");
        window.location="./";
    </script>';
}//else{
    // echo"unsuccessful";
//}


}

?>
