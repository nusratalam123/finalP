<?php
session_start();
include('connection/bd.php');
$del=$_GET['del'];

$query=mysqli_query($conn,"delete from company where id='$del'");
if($query){
    echo"<script>alert('Record has been delete successfully')</script>";
    header('location:create_company.php');
}
?>