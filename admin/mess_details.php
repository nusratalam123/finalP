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
            $query=mysqli_query($conn,"SELECT * FROM mess_info where id='$id'");
            while($row=mysqli_fetch_array($query)) {
    $name=$row['post_name'];
    $mobile=$row['mobile_no'];
    $area=$row['area'];
    $address=$row['address'];
    $date=$row['date'];
    $description=$row['description'];
    $cost=$row['cost_room'];
    $advance=$row['advance'];
    $seat=$row['number_seat'];
    $other=$row['others'];
    $room_img=$row['image'];
    $kitchen_img=$row['image_kitchen'];
    $washroom_img=$row['image_washroom'];
    $image=$row['image'];

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
    <link rel="stylesheet" href="css/mess-details.css">
     <!-- fontawsome icon-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="../homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="user_dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="mess_page.php">Mess page</a></li>
           <li class="breadcrumb-item"><a href="mess_details.php">Mess details</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Mess Details</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:92% ;margin-left:5%; background-color:#EBE9E8 ">
        <div id="msg"></div>
        <form action="#" method="post" style="margin:3%;padding:3%" id="customer-form"name="customer-form" >
         <h3 style="text-align:center">Mess Details</h3>
         <div class="mess-details">
    <div class="mess-img" style="width:33%" >
  <img src="image/<?php echo$image;?>" class="card-img-top" alt="...">
  <img src="image/<?php echo$kitchen_img;?>" class="card-img-top" alt="...">
  <img src="image/<?php echo$washroom_img;?>" class="card-img-top" alt="...">
    </div>  
  <ul class="list-group list-group-flush">
    <h6><li class="list-group-item">Name:<?php echo $name;?></li></h6>
    <h6><li class="list-group-item">Area:<?php echo $area;?></li></h6>
    <h6><li class="list-group-item">Date:<?php echo $date;?></li></h6>
    <h6><li class="list-group-item">Description:<?php echo $description;?></li></h6>
    <h6><li class="list-group-item">Number of seat:<?php echo $seat;?></li></h6>
    <h6><li class="list-group-item">Cost Of Rooom:<?php echo $cost;?></li></h6>
    <h6><li class="list-group-item">Advance payment:<?php echo $advance;?></li></h6>
  </ul>
      <div style="margin-left:45%">
          <a class="btn btn-primary" href="book_mess.php?id=<?php echo $id;?>"id="book" name="book">Book Now</a>
      </div>
    </div>
 </form>
 </div>
 <div style="margin-left:6%;margin-right:5%">
      <iframe width="100%" height="500px" margin-left="20px" src="https://maps.google.com/maps?q=5<?php echo $area;?>&output=embed"></iframe>
    </div>
   <div style="padding-bottom:50px">

   </div>
      </main>  
    </body>
  </html>