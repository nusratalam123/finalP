<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>admin-login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <link href="css/admin-login.css" rel="stylesheet">
  </head>

  <!-- <body>
    <div class="log">
    <form class="form-signin" id='admin-login'name='admin-login' action='admin_login.php' method='post'>
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Log in page</h1>
      </div>

      <div class="form-label-group">
        <input type="email"name="email"id="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit"id="submit" name="submit" placeholder="sign in">
    </form>
    </div>
   

  </body> -->
  <body class="text-center">
    <form class="form-signin" id='admin-login'name='admin-login' action='admin_login.php' method='post'>
      <h1 class="h3 mb-3 font-weight-normal">log in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" class="form-control" name="email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
      </div>
      <input class="btn btn-lg btn-primary btn-block" type="submit"id="submit" name="submit" placeholder="log in">
    </form>
</html>
<?php

include('connectionf/bdf.php');

if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $password=$_POST['password'];

  $query=mysqli_query($conn,"select * from admin_login where admin_email='$email'and admin_pass='$password' and admin_type='1'");
  if($query) {
    $_SESSION['email']=$email;
  if(mysqli_num_rows($query)>0){

    header('location:admin-dashbroad.php');
  }
  else{
    echo "<script>alert('please try again')</script>";
    header('location:../homef/homef.php');
  }

}
else{
  
}

}

