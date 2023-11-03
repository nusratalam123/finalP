<?php
session_start();
include('include/header.php');
include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="/homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <!-- <li class="breadcrumb-item"><a href="women_chef_page.php">Women Chef Page</a></li>
           <li class="breadcrumb-item"><a href="women_book.php?book=<?php echo $row['id']?>">Booked list of women chef</a></li> -->
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Booked list of  Chef</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="women_book_page.php" method="post" style="margin:3%;padding:3%" id="flat_form"name="flat_form" enctype="multipart/form-data" >
         <h3 style="text-align:center">Fill Up The Form</h3>
         <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name of Post User" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the area</label>
    <input type="text" class="form-control" id="area" name="area" placeholder="Enter Address of the area"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address Of the House</label>
    <input type="text" class="form-control" id="house" name="house" placeholder="Enter Address of the House"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Profession</label>
    <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter your profession name"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">National Id Card NUmber</label>
    <input type="text" class="form-control" id="national" name="national"placeholder="Enter the national id card number"required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Picture</label>
    <input type="file" class="form-control-file" id="file" name="file">
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
    

 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $area=$_POST['area'];
 $address=$_POST['address'];
 $profession=$_POST['profession'];
 $national=$_POST['national'];
 
   move_uploaded_file($temp,"image/$user_img");
  
$query=mysqli_query($conn,"INSERT INTO women_book(name,area,address,profession,mobile,image,national_img)VALUES
('$name','$area','$address','$profession','$mobile','$user_img','$national')");

    if($query){
      echo '<script>alert("Seccessfully Booked.")</script>';
     // header('location:women_chef_page.php');
    }  
    else{
        echo '<script>alert("Some thing went to wrong.please try again.")</script>';
    } 
  }
    ?>
</body>
</html>


