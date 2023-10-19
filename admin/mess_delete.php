<?php
session_start();
include('connectionf/bdf.php');
$del=$_GET['del'];
$query=mysqli_query($conn,"delete from mess_info where id='$del'");

if($query){
    echo"<script>alert('Successfully Delete')</script>";
    header('location:admin_mess_page.php');
}
?>