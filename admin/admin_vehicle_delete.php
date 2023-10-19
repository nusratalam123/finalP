<?php
session_start();
include('connectionf/bdf.php');
$del=$_GET['del'];
$query=mysqli_query($conn,"delete from vehicle_info where id='$del'");

if($query){
    echo"<script>alert('Record has been delete successfully')</script>";
    header('location:admin_vehicle_page.php');
}
?>