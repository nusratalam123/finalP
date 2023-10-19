<?php
session_start();
include('connectionf/bdf.php');
$del=$_GET['del'];
$query=mysqli_query($conn,"delete from women_book where id='$del'");

if($query){
    echo"<script>alert('Record has been delete successfully')</script>";
    header('location:women_book_list.php');
}
?>