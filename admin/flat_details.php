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
            $query=mysqli_query($conn,"SELECT * FROM flat_info where id='$id'");
            while($row=mysqli_fetch_array($query)) {
    $name=$row['post_name'];
    $mobile=$row['mobile'];
    $area=$row['area'];
    $address=$row['address'];
    $date=$row['date'];
    $description=$row['description'];
    $cost=$row['cost'];
    $advance=$row['advance'];
    $room_num=$row['room_num'];
    $washroom_num=$row['washroom_num'];
    $coridoor_num=$row['coridor_num'];
    $other=$row['other'];
    $current_bill=$row['current_bill'];
    $water_bill=$row['water_bill'];
    $gas_bill=$row['gas_bill'];
    $lift_charge=$row['lift_charge'];
    $other_cost=$row['other_cost'];
    $room_img=$row['room_img'];
    $kitchen_img=$row['kitchen_img'];
    $washroom_img=$row['wasroom_img'];
    $drawing_img=$row['drawing_img'];
    $daining_img=$row['daining_img'];
    $coridoor_img=$row['coridoor_img'];

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
    <link rel="stylesheet" href="css/flat_details.css">
     <!-- fontawsome icon-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="../homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="user_dashbroad.php">Dashbroad</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Flat Details</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
  
        <div style="width:90% ;margin-left:5%; background-color:#EBE9E8 ">
        <div id="msg"></div>
        <form action="#" method="post" style="margin:3%;padding:3%" id="customer-form"name="customer-form" >
         <h3 style="text-align:center">Flat Details</h3>
         <div class="flat-details">
          <div class="flat-img" >
        <div class="img">
           <img src="image/<?php echo $room_img ;?>" class="card-img-top" alt="...">
        </div>
        <div class="img">
          <img src="image/<?php echo $kitchen_img ?>" class="card-img-top" alt="...">
        </div>
        <div class="img">
          <img src="image/<?php echo $coridoor_img ?>" class="card-img-top" alt="...">
        </div>
        <div class="img">
          <img src="image/<?php echo $drawing_img ?>" class="card-img-top" alt="...">
        </div>
        <div class="img">
          <img src="image/<?php echo $daining_img ?>" class="card-img-top" alt="...">
        </div>
        <div class="img">
          <img src="image/<?php echo $washroom_img ?>" class="card-img-top" alt="...">
        </div>
  
    </div> 
     
  <ul class="list-group list-group-flush">
    <h6><li class="list-group-item">Name:<?php echo $name;?></li></h6>
    <h6><li class="list-group-item">Area:<?php echo $area;?></li></h6>
    <h6><li class="list-group-item">Date:<?php echo $date;?></li></h6>
    <h6><li class="list-group-item">Description:<?php echo $description;?></li></h6>
    <h6><li class="list-group-item">Number of rooms:<?php echo $room_num;?></li></h6>
    <h6><li class="list-group-item">Number of washroom:<?php echo $washroom_num;?></li></h6>
    <h6><li class="list-group-item">Number of coridoor:<?php echo $coridoor_num;?></li></h6>
    <h6><li class="list-group-item">Cost Of Room:<?php echo $cost;?></li></h6>
    <h6><li class="list-group-item">Advance payment:<?php echo $advance;?></li></h6>
    <h6><li class="list-group-item">Cost of Current Bill:<?php echo $current_bill;?></li></h6>
    <h6><li class="list-group-item">Cost of Water Bill:<?php echo $water_bill;?></li></h6>
    <h6><li class="list-group-item">Cost of Gas Bill:<?php echo $gas_bill;?></li></h6>
    <h6><li class="list-group-item">Cost of Lift Bill:<?php echo $lift_charge;?></li></h6>
    <h6><li class="list-group-item">Cost of Others Bill:<?php echo $other_cost;?></li></h6>
    <h6><li class="list-group-item">Other Information:<?php echo $other;?></li></h6>
  </ul>
</div>
<div style="margin-left:45%">
          <a class="btn btn-primary" href="book_flat.php?id=<?php echo $id?>"id="book" name="book">Book Now</a>
</div>
</form>
</div>
<div style="margin-left:5%;margin-right:5%">
<iframe width="100%" height="500px" margin-left="20px" src="https://maps.google.com/maps?q=5<?php echo $area;?>&output=embed"></iframe>
    </div>
   <div style="padding-bottom:50px">

   </div>
      </main>  
</body>
</html>