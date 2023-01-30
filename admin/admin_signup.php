<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Signup</title>
 	

<//?php include('./header.php');?>
<//?php include('./db_connect.php'); ?>
<//?php 
session_start();

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>
</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#59b6ec61;
		display: flex;
		align-items: center;
		background: url(assets/img/recruitment-cover.jpg);
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	#login-right .card{
		margin: auto;
		z-index: 1
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    background: white;
    padding: .5em 0.7em;
    border-radius: 50% 50%;
    color: #000000b3;
    z-index: 10;
}
div#login-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100%);
    height: calc(100%);
    background: #000000e0;
}

</style>

<body>


  <main id="main" class=" bg-dark">
  		<div id="login-left">
  			
  		</div>

  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
  						<div class="logo">
			  				<span class="fa fa-hands-helping"></span>
			  			</div>
  					<form id="login-form" action="" method="POST">
  						<div class="form-group">
  							<label for="name" class="control-label">Name</label>
  							<input type="text" id="name" name="name" class="form-control" required="required">
  						</div>
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control" required="required">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control" required="required">
  						</div>
  	<center><input type="Submit" id="submit" name="submit" class="col-md-4 btn-primary"></input></center><br>
						  <center><p>Or <a href="login.php">Log In Here</a></p>
					</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!--<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script>
$(document).ready(function(){
$("#submit").click(function(){

var name=("#name").val();
var username=("#username").val();
var password=("#password").val();

$.ajax(
{
url:"adminSignin.php",
type:"POST",
data{
	name:name,
	username:username,
	password:password
}

			});


});
});


</script>!-->
</body>

</html>

<?php
include 'db_connect.php';

if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $password=$_POST['password'];
 $username=$_POST['username'];
 $sql="INSERT INTO `admin`(`id`, `name`, `username`, `password`)  VALUES ('','$name','$username','$password')";
 $query=mysqli_query($conn,$sql);
 if($query){

    echo" <script> alert('Admin account successfully created! now login');
	location.href='index.php?page=home';
	</script>";


 }else{
    echo"<script>alert('unsuccess');</script>";

}
}
?>

<?php echo isset($meta['password']) ? $meta['password']: '' ?>

<?php echo isset($meta['username']) ? $meta['username']: '' ?>




