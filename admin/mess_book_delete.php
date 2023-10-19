<?php
session_start();
include('connectionf/bdf.php');
$del=$_GET['del'];
$query=mysqli_query($conn,"delete from mess_book where id='$del'");

if($query){
    echo"<script>alert('Successfully Delete')</script>";
    header('location:mess_book_list.php');
}
?>