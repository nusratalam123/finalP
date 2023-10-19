<?php
session_start();
include('include/header.php');
include('include/sidebar.php');
include('connectionf/bdf.php');
$id=$_GET['edit'];
$query=mysqli_query($conn,"select *from vehicle_info where id='$id'");
while($row=mysqli_fetch_array($query)){
    $name=$row['name'];
    $mobile=$row['mobile_no'];
    $area=$row['area'];
    $address=$row['address'];
    $date=$row['date'];
    $payment=$row['payment'];
    $type=$row['type'];
    $vehicle_img=$row['vehicle_img'];
    $national_img=$row['national_id'];
    $license_img=$row['license_img'];
}

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="/homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <!-- <li class="breadcrumb-item"><a href="vehicle_page.php">Vehicle Page</a></li>
           <li class="breadcrumb-item"><a href="add_vehicle.php">Add vehicle Post</a></li> -->
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Vehicle Post</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
     
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="#" method="post" style="margin:3%;padding:3%" id="flat_form"name="flat_form" enctype="multipart/form-data" >
         <h3 style="text-align:center"> Vehicle post information</h3>
         <div class="form-group">
    <label for="exampleInputEmail1">Name of the User</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>" placeholder="Enter name of Post User" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the area</label>
    <input type="text" class="form-control" id="area" name="area"  value="<?php echo $area;?>" placeholder="Enter Address of the area"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="address" name="address"  value="<?php echo $address;?>"placeholder="Enter Address "required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Which type of vehicle </label>
    <input type="text" class="form-control" id="type" name="type"  value="<?php echo $type;?>"placeholder="Enter the type of vehicle"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">date</label>
    <input type="text" class="form-control" id="time" name="time"  value="<?php echo $date;?>" placeholder="date"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost for the service</label>
    <input type="text" class="form-control" id="cost" name="cost"  value="<?php echo $payment;?>"  placeholder="Enter for the service"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name="mobile"value="<?php echo $mobile;?>" placeholder="Enter Mobile number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> vehicle image</label>
    <input type="file" class="form-control-file" id="file"  value="<?php echo $vehicle_img;?>"name="file">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> National image</label>
    <input type="file" class="form-control-file" id="national"  value="<?php echo $national_img;?>"name="national">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> License image</label>
    <input type="file" class="form-control-file" id="license"  value="<?php echo $license_img;?>" name="license">
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

 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $area=$_POST['area'];
 $address=$_POST['address'];
 $time=$_POST['time'];
 $cost=$_POST['cost'];
 $type=$_POST['type'];

 $vehicle=$_FILES['file']['name'];
 $temp=$_FILES['file']['tmp_name'];
$national=$_FILES['national']['name'];
$temp1=$_FILES['national']['tmp_name'];
$license=$_FILES['license']['name'];
$temp2=$_FILES['license']['tmp_name'];
move_uploaded_file($temp,"image/$vehicle"); 
move_uploaded_file($temp1,"image/$national"); 
move_uploaded_file($temp2,"image/$license"); 

$query=mysqli_query($conn,"UPDATE vehicle_info set email='$email',name='$name',type='$type',area='$area',payment='$cost',mobile_no='$mobile'
,date='$time',address='$address',vehicle_img='$vehicle',national_id='$national',license_img='$license' where id='$id'");
 
    if($query){
      echo '<script>alert("data insert seccessfully.")</script>';
      header('location:admin_vehicle.php');
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
  }
    ?>
</body>
</html>


