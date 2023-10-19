<?php
session_start();
include('include/header.php');
include('include/sidebar.php');
?>

<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <?php
            include('connectionf/bdf.php');
            $id=$_GET["detail"];
            $query=mysqli_query($conn,"SELECT * FROM women_chef_info where id='$id'");
            while($row=mysqli_fetch_array($query)) {
    $name=$row['name'];
    $mobile=$row['mobile'];
    $area=$row['area'];
    $date=$row['date'];
    $description=$row['descripton'];
    $cost=$row['cost'];
    $age=$row['age'];
    $chef_img=$row['image'];
    $time=$row['time'];

            }
            ?>
        </div>
      </div>
    </header>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mess details</title>
    <link rel="stylesheet" href="css/women_chef_details.css">
     <!-- fontawsome icon-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="../homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="user_dashbroad.php">Dashbroad</a></li>
           <!-- <li class="breadcrumb-item"><a href="women_chef_page.php">Women chef Page</a></li>
           <li class="breadcrumb-item"><a href="women_chef_details.php?detail=<?php echo $row['id']?> ">Women Details Page</a></li> -->
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Women chef Details</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:52% ;margin-left:18%; background-color:#EBE9E8 " >
        <form action="#" method="post" style="margin:10%;padding:10%;width:500px" id="customer-form"name="customer-form" >
         <h3 style="text-align:center">Women Chef Details</h3>
         <div class="women_img" >
         <img src="image/<?php echo $chef_img;?>" class="rounded mx-auto d-block" alt="...">
         </div>
        
    <ul class="list-group list-group-flush">
    <h6><li class="list-group-item">Name:<?php echo $name;?></li></h6>
    <h6><li class="list-group-item">Working Area:<?php echo $area;?></li></h6>
    <h6><li class="list-group-item">Date:<?php echo $date;?></li></h6>
    <h6><li class="list-group-item">Service time:<?php echo $time;?></li></h6>
    <h6><li class="list-group-item">Salary:<?php echo $cost;?></li></h6>
    <h6><li class="list-group-item">Age of the chef:<?php echo $age;?></li></h6>
    <h6><li class="list-group-item">Description:<?php echo $description;?></li></h6>
  </ul>
  <div style="margin-left:40%">
  
    
          <a class="btn btn-primary" href="women_book_page.php?id=<?php echo $id?>">Book Now</a>
      </div>
    </div> 
     
  


</form>
 
</body>
</html>