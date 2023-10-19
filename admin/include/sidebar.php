<!DOCTYPE html>
<html>
    <head>
        <title>a:hover in inline CSS</title>
        <style>
            #alink {
   padding:8px 16px;
   border:1px solid gainsboro;
   color:black;
   font-weight:bold;
  }
  #alink:hover {
  background-color: #E2E3EC;
}
        </style>
    </head>
</html>                 
<?php
include('connectionf/bdf.php');
//session_start();

$query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' and admin_type='1'");

 if(mysqli_num_rows($query)>0){
  ?>
  <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
      <h3 style="padding:10px">Super Admin</h3>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a  id="alink"class="nav-link active" href="admin-dashbroad.php">
              <span data-feather="bar-chart-2"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
           </li>
           <li>
            <a id="alink" class="nav-link active" href="../homef/homef.php">
              <span data-feather="home"></span>
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="alink"class="nav-link" href="admin_mess_page.php">
              <span data-feather="home"></span>
              Mess
            </a>
          </li>
          <!-- <li class="nav-item">
            <a id="alink" class="nav-link" href="admin_mess_approve.php">
              <span data-feather="home"></span>
              Mess Approval page
            </a>
          </li> -->
          <li class="nav-item">
            <a id="alink" class="nav-link" href="admin_flat.php">
              <span data-feather="home"></span>
              Flat
            </a>
          </li>
          <li class="nav-item">
            <a id="alink"class="nav-link" href="admin_women.php">
              <span data-feather="users"></span>
              Women Chef
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="admin_vehicle_page.php">
              <span data-feather="truck"></span>
              Vehicle
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="customer.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="booking.php">
              <span data-feather="bar-chart-2"></span>
               Booked List
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="admin_review_page.php">
              <span data-feather="users"></span>
              Review Page
            </a>
          </li>
        </ul>
      </div>
    </nav>
<?php
 }
 else{
  ?>
 
  <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
      <h3 style="padding:10px"> USER
        
        <?
        
           echo $_SESSION['first_name'];
         ?></h3>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a  id="alink" class="nav-link active" href="user_dashBroad.php">
              <span data-feather="home"></span>
              
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link active" href="../homef/homef.php">
              <span data-feather="home"></span>
              
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="mess_page.php">
              <span data-feather="home"></span>
              Mess
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="flat_page.php">
              <span data-feather="home"></span>
              Flat
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="women_chef_page.php">
              <span data-feather="users"></span>
              Women Chef
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="vehicle_page.php">
              <span data-feather="truck"></span>
              Vehicle
            </a>
          </li>
          <li class="nav-item">
            <a id="alink" class="nav-link" href="see_review.php">
              <span data-feather="layers"></span>
              Review Page
            </a>
          </li>
        </ul>
      </div>
    </nav>
<?php
 }

?>

