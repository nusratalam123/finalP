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
           <li class="breadcrumb-item"><a href="flat_page.php">Flat Page</a></li>
           </ol>
        </nav> -->
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Booking Information For Flat</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="book_flat.php" method="post" style="margin:3%;padding:3%"  enctype="multipart/form-data" >
         <h3 style="text-align:center">Fill Up The Form</h3>
         <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter User name" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Profession</label>
    <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter your profession"required autofocus>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1"> Guardian Name</label>
    <input type="text" class="form-control" id="guardian_name" name="guardian_name" placeholder="Enter Guardian name" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Guardian Mobile Number</label>
    <input type="text" class="form-control" id="guardian_mobile" name="guardian_mobile" placeholder="Enter Guardian mobile number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Relation with Guardian</label>
    <input type="text" class="form-control" id="relation" name="relation" placeholder="Relation with Guardian"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Marrital Status</label>
    <input type="text" class="form-control" id="marital" name="marital" placeholder="Enter Marital status"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Present Address</label>
    <input type="text" class="form-control" id="present" name="present" placeholder="Enter present Address of the home"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Parmanent Address </label>
    <input type="text" class="form-control" id="parmanent" name="parmanent" placeholder="Enter parmanent Address of the home"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number The national id card Number</label>
    <input type="text" class="form-control" id="national" name="national" placeholder="Enter the national id card number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number of family Member</label>
    <input type="text" class="form-control" id="family_member" name="family_member" placeholder="Family number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> Your Image</label>
    <input type="file" class="form-control-file" id="file" name="file">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Institutinal Id Card </label>
    <input type="file" class="form-control-file" id="institute" name="institute">
  </div>
  
      <div style="margin-left:45%">
      <input class="btn btn-primary" type="submit"id="submit" name="submit">
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
    $user_img=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    
    $national_img=$_FILES['national']['name'];
    $temp1=$_FILES['national']['tmp_name'];
    $institute_img=$_FILES['institute']['name'];
    $temp2=$_FILES['institute']['tmp_name'];

 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $profession=$_POST['profession'];
 $guardian_name=$_POST['guardian_name'];
 $guardian_mobile=$_POST['guardian_mobile'];
 $relation=$_POST['relation'];
 $marital=$_POST['marital'];
 $present=$_POST['present'];
 $parmanent=$_POST['parmanent'];
 $national=$_post['national'];
 $family_member=$_POST['family_member'];

 
   move_uploaded_file($temp,"image/$user_img");
   
   move_uploaded_file($temp2,"image/$institute_img");


   $query1=mysqli_query($conn,"INSERT INTO flat_book(name,mobile,profession,guardian_name,guardian_mobile,relation,marital_status,present,
   parmanent,family_member,image,national,institute) VALUES
  ('$name','$mobile','$profession','$guardian_name','$guardian_mobile','$relation','$marital','$present','$parmanent','$family_member',
  '$user_img','$national','$institute_img')");
    if($query1){
        echo "<script>alert('successfully booked')</script>";
        //header("Location:viewimage.php");
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
  }
    ?>
</body>
</html>

