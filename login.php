<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sign In to Job Seek</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin" >
  <form action="login2.php"  method="get">
    <img class="mb-4" src="./brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>

    <div class="form-control">
      <input type="text" class="form-control" placeholder="Username" name="username" required="required">
      <!-- <label for="floatingInput"></label> -->
    </div>
    <div class="form-control">
      <input type="password" class="form-control" placeholder="Password" name="Password" required="required">
      <!-- <label for="floatingPassword"></label> -->
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign In</button>
    <br>
    <br>
    <p>
      <a href="registration.php" class="text-grey">or Create an Account</a>
    </p>
    <!-- <button class="w-100 btn btn-lg btn-success" type="submit" name="submit">Sign Up</button> -->
    <p class="mt-2 text-muted">&copy; 2023</p>
  </form>
</main>
 
  </body>

    

</html>


