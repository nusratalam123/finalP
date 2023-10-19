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
           <li class="breadcrumb-item"><a href="admin_flat.php">flat Page</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add flat Post</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
     
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="add_flat.php" method="post" style="margin:3%;padding:3%" id="flat_form"name="flat_form" enctype="multipart/form-data" >
         <h3 style="text-align:center">Add flat post information</h3>
         <div class="form-group">
    <label for="exampleInputEmail1">Name of the Post User</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name of Post User" required autofocus>
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
    <label for="exampleInputEmail1">Address Of the area</label>
    <input type="text" class="form-control" id="area" name="area" placeholder="Enter Address of the area"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" class="form-control" id="date" name="date" placeholder="Enter date"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description Of home</label>
    <textarea type="text" class="form-control" id="description" name="description"  placeholder="Enter The Description"required autofocus></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost Of room</label>
    <input type="text" class="form-control" id="cost" name="cost"  placeholder="Enter the room price"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Advanced For Room</label>
    <input type="text" class="form-control" id="advance" name="advance" placeholder="Enter the room advance price"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number of Room</label>
    <input type="text" class="form-control" id="room" name="room" placeholder="Enter The number of room"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number of washroom</label>
    <input type="text" class="form-control" id="washroom" name="washroom"  placeholder="Enter number of washrrom"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number of Coridoor</label>
    <input type="text" class="form-control" id="coridoor" name="coridoor"  placeholder="Enter the coridoor number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost Of current bill</label>
    <input type="text" class="form-control" id="current" name="current"  placeholder="Enter the cost of current"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost Of water bill</label>
    <input type="text" class="form-control" id="water" name="water"  placeholder="Enter the cost of water bill"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cost Of gas bill</label>
    <input type="text" class="form-control" id="gas" name="gas"  placeholder="Enter the cost of gas bill"required autofocus>
  </div><div class="form-group">
    <label for="exampleInputEmail1">Cost Of lift charge</label>
    <input type="text" class="form-control" id="lift" name="lift"  placeholder="Enter the cost of lift charge"required autofocus>
  </div><div class="form-group">
    <label for="exampleInputEmail1">Cost Of others</label>
    <input type="text" class="form-control" id="other_cost" name="other_cost"  placeholder="Enter the value of other cost"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Others information</label>
    <input type="text" class="form-control" id="other" name="other" placeholder="Enter the Other information"required autofocus>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1"> Room image</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> kitchen image</label>
    <input type="file" class="form-control-file" id="kitchen_img" name="kitchen_img">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Coridoor image</label>
    <input type="file" class="form-control-file" id="coridoor_img" name="coridoor_img">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> drawnig image</label>
    <input type="file" class="form-control-file" id="drawing_img" name="drawing_img">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Daining image</label>
    <input type="file" class="form-control-file" id="daining_img" name="daining_img">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Washroom image</label>
    <input type="file" class="form-control-file" id="washroom_img" name="washroom_img">
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
    
    $kitchen_img=$_FILES['kitchen_img']['name'];
    $temp1=$_FILES['kitchen_img']['tmp_name'];
    $washroom_img=$_FILES['washroom_img']['name'];
    $temp2=$_FILES['washroom_img']['tmp_name'];

    $coridoor_img=$_FILES['coridoor_img']['name'];
    $temp3=$_FILES['coridoor_img']['tmp_name'];
    
    $drawing_img=$_FILES['drawing_img']['name'];
    $temp4=$_FILES['drawing_img']['tmp_name'];
    $daining_img=$_FILES['daining_img']['name'];
    $temp5=$_FILES['daining_img']['tmp_name'];

 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $area=$_POST['area'];
 $address=$_POST['address'];
 $date=$_POST['date'];
 $description=$_POST['description'];
 $cost=$_POST['cost'];
 $advance=$_POST['advance'];
 $room=$_POST['room'];
 $washroom=$_POST['washroom'];
 $coridoor=$_POST['coridoor'];
 $current=$_POST['current'];
 $water=$_POST['water'];
 $gas=$_POST['gas'];
 $lift=$_POST['lift'];
 $other_cost=$_POST['other_cost'];
 $other=$_POST['other'];
 
   move_uploaded_file($temp,"image/$room_img");
   move_uploaded_file($temp1,"image/$kitchen_img");
   move_uploaded_file($temp2,"image/$washroom_img");
   move_uploaded_file($temp4,"image/$drawing_img");
   move_uploaded_file($temp5,"image/$daining_img");
   move_uploaded_file($temp3,"image/$coridoor_img");
$query=mysqli_query($conn,"INSERT INTO flat_info(post_name,area,address,mobile,date,description,cost,advance,room_num,washroom_num,
  coridor_num,other,room_img,kitchen_img,coridoor_img,drawing_img,daining_img,wasroom_img,current_bill,water_bill,gas_bill,lift_charge,other_cost)
   VALUES('$name','$area','$address','$mobile','$date','$description','$cost', '$advance','$room','$washroom','$coridoor','$other',   '$room_img',
   '$kitchen_img','$coridoor_img','$drawing_img','$daining_img','$washroom_img','$current','$water','$gas','$lift','$other_cost')");
    if($query){
      echo '<script>alert("data insert seccessfully.")</script>';
      header('location:flat_page.php');
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
  }
    ?>
</body>
</html>


