<?php

include('connection/bd.php');

if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $password=$_POST['password'];
  echo $email;
  $query=mysqli_query($conn,"select * from admin_login where admin_email='$email'and admin_pass='$password'");
  if($query) {
    $_SESSION['email']=$_email;
  if(mysqli_num_rows($query)>0){

    header('location:admin-dashbroad.php');
  }
  else{
    echo "<script>alert('please try again')</script>";
  }

}
}

