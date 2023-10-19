<?php
session_start();
include('connectionf/bdf.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];

$query=mysqli_query($conn,"select *from mess_info where id='$id'");
while($row=mysqli_fetch_array($query)){
    $name=$row['post_name'];
    $mobile=$row['mobile_no'];
    $address=$row['address'];
    $date=$row['date'];
    $description=$row['description'];
    $cost_room=$row['cost_room'];
    $advance=$row['advance'];
    $number_seat=$row['number_seat'];
    $room_img=$row['image'];
    $others=$row['others'];
    $image_kitchen=$row['image_kitchen'];
    $image_washroom=$row['image_washroom'];
    $area=$row['area'];
}
?>

<!-- $query=mysqli_query($conn,"select *from mess_info where id='$edit'");
while($row=mysqli_fetch_array($query)){
    $name=$row['post_name'];
    $mobile=$row['mobile_no'];
   
}
?> -->

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="mess_page.php">Mess Page</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Mess Post</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="mess_edit.php" method="post" style="margin:3%;padding:3%" id="mess-form"name="mess-form" enctype="multipart/form-data" >
         <h3 style="text-align:center">Edit Mess information</h3>
         <div class="form-group">
    <label for="exampleInputEmail1">Name of the Post User</label>
    <input type="text" class="form-control" id="name" name="name"value="<?php echo $name?>" placeholder="Enter name of Post User" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name="mobile"value="<?php echo $mobile?>" placeholder="Enter Mobile number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the Home</label>
    <input type="text" class="form-control" id="address" name="address"value="<?php echo $address?>" placeholder="Enter Address of the home"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the area</label>
    <input type="text" class="form-control" id="area" name="area"value="<?php echo $area?>" placeholder="Enter Address of the area"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" class="form-control" id="date" name="date" value="<?php echo $date?>" placeholder="Enter date"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">DEscription Of home</label>
    <textarea type="text" class="form-control" id="description" name="description"value="<?php echo $description?>"  placeholder="Enter The Description"required autofocus></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost Of room</label>
    <input type="text" class="form-control" id="cost" name="cost" value="<?php echo $cost_room?>" placeholder="Enter the room price"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Advanced For Room</label>
    <input type="text" class="form-control" id="advance" name="advance"value="<?php echo $advance?>" placeholder="Enter the room advance price"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number of seat</label>
    <input type="text" class="form-control" id="seat" name="seat"value="<?php echo $number_seat?>" placeholder="Enter The number of the seat"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Others information</label>
    <input type="text" class="form-control" id="other" name="other"value="<?php echo $others?>" placeholder="Enter the Other information"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Room image</label>
    <input type="file" class="form-control-file" id="file" name="file"value="<?php echo $room_img?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> kitchen image</label>
    <input type="file" class="form-control-file" id="kitchen" name="kitchen"value="<?php echo $image_kitchen?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Washroom image</label>
    <input type="file" class="form-control-file" id="washroom" name="washroom"value="<?php echo $image_washroom?>">
  </div>
  <input type="hidden" id="id" name="id"  value="<?php echo $_GET['edit'];?>">
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
$login=$_SESSION['email'];
if(isset($_POST['submit'])){
    $room_img=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    
    $kitchen_img=$_FILES['kitchen']['name'];
    $temp1=$_FILES['kitchen']['tmp_name'];
    $washroom_img=$_FILES['washroom']['name'];
    $temp2=$_FILES['washroom']['tmp_name'];

 $name=$_POST['name'];
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
   $query1=mysqli_query($conn,"update mess_info set post_name='$name',mobile_no='$mobile',address='$address',date='$date',
   description='$description', cost_room='$cost',advance='$advance',number_seat='$seat',image='$room_img',others='$other',
   image_kitchen='$kitchen_img',image_washroom='$washroom_img',area='$area',email='$login' where id='$id'");
    if($query1){
        echo "<script>alert('data update successfully')</script>";
        header('Location:mess_page.php');
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
  }    

?>