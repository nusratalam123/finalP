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
            $query=mysqli_query($conn,"SELECT * FROM mess_book where id='$id'");
            while($row=mysqli_fetch_array($query)) {
    $name=$row['name'];
    $mobile=$row['mobile'];
    $profession=$row['profession'];
    $guardian_name=$row['guardian_name'];
    $guardian_mobile=$row['guardian_mobile'];
    $relation=$row['relation'];
    $marital_status=$row['marital_status'];
    $present=$row['present'];
    $parmanent=$row['parmanent'];
    $date=$row['date'];
    $image=$row['image'];
    $national=$row['national'];
    $institute=$row['institute'];
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
    <title>Mess Book details</title>
    <link rel="stylesheet" href="css/mess_book.css">
     <!-- fontawsome icon-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="/homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="booking.php">Booking page</a></li>

           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Booked Details</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:92% ;margin-left:5%; background-color:#EBE9E8 ">
        <form action="#" method="post" style="margin:3%;padding:3%" id="customer-form"name="customer-form" >
         <h3 style="text-align:center">Booked Details</h3>
         <div class="mess-details">
        
    <div class="mess_book" >
  <img src="image/<?php echo$image;?>" class="card-img-top" alt="...">
  <img src="image/<?php echo$national;?>" class="card-img-top" alt="...">
  <img src="image/<?php echo$institute;?>" class="card-img-top" alt="...">
    </div>  
  <ul class="list-group list-group-flush">
    <h6><li class="list-group-item">Name:<?php echo $name;?></li></h6>
    <h6><li class="list-group-item">Mobile No:<?php echo $mobile;?></li></h6>
    <h6><li class="list-group-item">Profession:<?php echo $profession;?></li></h6>
    <h6><li class="list-group-item">Guardian Name:<?php echo $guardian_name;?></li></h6>
    <h6><li class="list-group-item">Guardian Mobile:<?php echo $guardian_mobile;?></li></h6>
    <h6><li class="list-group-item">Relation with Guardian:<?php echo $relation;?></li></h6>
    <h6><li class="list-group-item">Merital Status:<?php echo $marital_status;?></li></h6>
    <h6><li class="list-group-item">Present Address:<?php echo $present;?></li></h6>
    <h6><li class="list-group-item">Parmanent Address:<?php echo $parmanent;?></li></h6>
    <h6><li class="list-group-item">Date of Birth:<?php echo $date;?></li></h6>
  </ul>  
    </div>
    <div style="margin-left:0.3%; gap:10%;">
       <div class="btn-group" style="gap:10%;">
          <a href="accept.php?id=<?php echo $_GET['detail']?>" class="btn btn-success">Accept</a>
          <a href="mess_reject.php?id=<?php echo $_GET['detail'];?>" class="btn btn-danger">Reject</a>
        </div>
                     
     </div>
 </form>
 </div>
    
    </body>
  </html>