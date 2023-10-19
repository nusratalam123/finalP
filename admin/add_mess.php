<?php
session_start();
include('include/header.php');
include('include/sidebar.php');

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <!-- <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="../homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="mess_page.php">Mess Page</a></li>
           <li class="breadcrumb-item"><a href="add-mess.php">Add Mess Post</a></li>
           </ol>
        </nav> -->
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Mess Post Information</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="add_mess.php" method="post" style="margin:3%;padding:3%" id="mess-form"name="mess-form" enctype="multipart/form-data" >
         <h3 style="text-align:center">Fill up The Form</h3>
         <div class="form-group">
    <label for="exampleInputEmail1">Name of User</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name of Post User" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email of user</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter the email address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the Home</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address of the home"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the Area</label>
    <input type="text" class="form-control" id="area" name="area" placeholder="Enter Address of the area"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Which month </label>
    <input type="text" class="form-control" id="date" name="date" placeholder="Enter date"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description Of Home</label>
    <textarea type="text" class="form-control" id="description" name="description"  placeholder="Enter The Description"required autofocus></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost Of Room</label>
    <input type="text" class="form-control" id="cost" name="cost"  placeholder="Enter the room price"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Advanced For Room</label>
    <input type="text" class="form-control" id="advance" name="advance" placeholder="Enter the room advance price"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number of Seat</label>
    <input type="text" class="form-control" id="seat" name="seat" placeholder="Enter The number of the seat"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Others Information</label>
    <input type="text" class="form-control" id="other" name="other" placeholder="Enter the Other information"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Room image</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> kitchen image</label>
    <input type="file" class="form-control-file" id="kitchen" name="kitchen">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Washroom image</label>
    <input type="file" class="form-control-file" id="washroom" name="washroom">
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
    if(isset($_POST['submit'])){
    $room_img=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    
    $kitchen_img=$_FILES['kitchen']['name'];
    $temp1=$_FILES['kitchen']['tmp_name'];
    $washroom_img=$_FILES['washroom']['name'];
    $temp2=$_FILES['washroom']['tmp_name'];

 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $area=$_POST['area'];
 $address=$_POST['address'];
 $date=$_POST['date'];
 $description=$_POST['description'];
 $cost=$_POST['cost'];
 $advance=$_POST['advance'];
 $seat=$_POST['seat'];
 $other=$_POST['other'];
 
   move_uploaded_file($temp,"image/$room_img");
   move_uploaded_file($temp1,"image/$kitchen_img");
   move_uploaded_file($temp2,"image/$washroom_img");
   $query1=mysqli_query($conn,"INSERT INTO mess_info(post_name,mobile_no,address,date,description,cost_room,
 advance,number_seat,image,others,image_kitchen,image_washroom,area,email)
  VALUES('$name','$mobile','$address','$date','$description','$cost',
  '$advance','$seat','$room_img','$other','$kitchen_img','$washroom_img','$area','$email')");

    if($query1){
        echo "<script>alert('data upload successfully')</script>";
        //header("Location:viewimage.php");
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
  }
    ?>
</body>
</html>
