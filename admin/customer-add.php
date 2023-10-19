<?php

include('connectionf/bdf.php');

  $email=$_POST['email'];
 $username=$_POST['username'];
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $password=$_POST['password'];
 $admintype=$_POST['admin-type'];
$query =mysqli_query($conn,"INSERT INTO admin_login ( admin_email,admin_pass,username,first_name,last_name,admin_type)
VALUES ('$email','$password', '$username', '$firstname', '$lastname','$admintype')"); 

var_dump($query);
    if($query){
        echo '<script>alert("data insert successfully")</script>';
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
