<?php

include('connection/bd.php');


 $company_name=$_POST['company_name'];
 $description=$_POST['description'];

$query1=mysqli_query($conn,"INSERT INTO company(company_name,description) VALUES('$company_name','$description')");

//var_dump($query1);
    if($query1){
        echo "<script>alert('data insert successfully')</script>";
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
