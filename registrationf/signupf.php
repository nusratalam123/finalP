<?php
$conn=mysqli_connect("localhost","root","","bechalor_accomodation");

if(isset($_POST['submit'])){
  $email=$_POST['email'];
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $password=$_POST['password'];
 $admintype=$_POST['admin-type'];
$query =mysqli_query($conn,"INSERT INTO admin_login ( admin_email,admin_pass,first_name,last_name,admin_type)
VALUES ('$email','$password', '$firstname', '$lastname','$admintype')"); 
echo $query;
var_dump($query);
    if($query){
        echo '<script>alert("data insert successfully")</script>';
        header('location:../loginf/loginpage.php');
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 

}