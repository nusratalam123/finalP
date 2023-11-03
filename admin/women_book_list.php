<?php
session_start();
include('include/header.php');
include('include/sidebar.php');

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="width:100%">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="/homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="booking.php">Booked Page</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">chef Booked List</h1>
          </div>
          <?php

$quary = mysqli_query($conn,"select * from women_book");
while ( $row = mysqli_fetch_array($quary) ) :

?>
<div class="card-group" style="padding-bottom:10px;width:80%; margin-left:10%;heigth:30%">
  <div class="card">
  <div class="mess-img" style="display:flex;width:25%;gap:10%;margin-left:20%;" >
               <img src="image/<?php echo $row['image'];?>" class="card-img-top" alt="Card image cap">
               <img src="image/<?php echo $row['national_img'];?>" class="card-img-top" alt="Card image cap">
  </div> 
    <div class="card-body">
    <ul class="list-group list-group-flush">
    <h6><li class="list-group-item">Name:<?php echo $row['name'];?></li></h6>
    <h6><li class="list-group-item">Area:<?php echo $row['area'];?></li></h6>
    <h6><li class="list-group-item">Date:<?php echo $row['profession'];?></li></h6>
    <h6><li class="list-group-item">Description:<?php echo $row['mobile'];?></li></h6>
  </ul>
    </div>
    <div style="margin-left:2.8%;margin-bottom:2%">
       <div class="btn-group" style="gap:10%;">
          <a href="accept.php?id=<?php echo $row['id']?>" class="btn btn-success">Accept</a>
          <a href="mess_reject.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Reject</a>
          <a href="women_book_delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
        </div>
                
    </div>
  </div>
</div>
<?php
endwhile;
?>
    
  </body>
</html>