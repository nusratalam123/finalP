<?php
session_start();
include('include/header.php');
include('include/sidebar.php');

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="../homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="user_dashbroad.php">Dashbroad</a></li>
           <!-- <li class="breadcrumb-item"><a href="women_chef_page.php">Women Chef Page</a></li>
           <li class="breadcrumb-item"><a href="add_women_chef.php">Add Women Chef Post</a></li> -->
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Women Chef Post</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="add_women_chef.php" method="post" style="margin:3%;padding:3%" id="flat_form"name="flat_form" enctype="multipart/form-data" >
         <h3 style="text-align:center">Add Women Chef post information</h3>
         <div class="form-group">
    <label for="exampleInputEmail1">Name of the Post User</label>
    <input type="text" class="form-control" id="chef_name" name="chef_name" placeholder="Enter name of Post User" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the area</label>
    <input type="text" class="form-control" id="area" name="area" placeholder="Enter Address of the area"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" class="form-control" id="date" name="date" placeholder="Enter date"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Service of time</label>
    <input type="text" class="form-control" id="time" name="time"  placeholder="Enter The Service time"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost for the service</label>
    <input type="text" class="form-control" id="cost" name="cost"  placeholder="Enter for the service"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter the description"required autofocus></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" class="form-control" id="age" name="age" placeholder="Enter the age is"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> chef image</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>
      <div style="margin-left:45%">
      <input class="btn btn-primary" type="submit"id="submit" name="submit" placeholder="sign in">
      </div>    
    </form>
 </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

        </main>
      </div>
    </div>
    <?php
    include('connectionf/bdf.php');
    $email=$_SESSION['email'];
    if(isset($_POST['submit'])){
    $chef_img=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    

 $chef_name=$_POST['chef_name'];
 $mobile=$_POST['mobile'];
 $area=$_POST['area'];
 $date=$_POST['date'];
 $time=$_POST['time'];
 $description=$_POST['description'];
 $cost=$_POST['cost'];
 $age=$_POST['age'];
 
   move_uploaded_file($temp,"image/$chef_img");

$query=mysqli_query($conn,"INSERT INTO women_chef_info(email,name,area,date,time,age,cost,descripton,image,mobile)VALUES
 ('$email','$chef_name','$area','$date','$time','$age','$cost','$description', '$chef_img','$mobile')");


    if($query){
      echo '<script>alert("data insert seccessfully.")</script>';
      header('location:women_chef_page.php');
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
  }
    ?>
</body>
</html>


