<?php
session_start();
include('include/header.php');
include('include/sidebar.php');
include('connectionf/bdf.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="../homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="user_dashbroad.php">Dashbroad</a></li>
           </ol>
        </nav>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2" style="align:center;">Review Page</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
     
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="review_page.php" method="post" style="margin:3%;padding:3%" id="flat_form"name="flat_form" enctype="multipart/form-data" >
         <!-- <div class="form-group">
    <label for="exampleInputEmail1">From</label>
    <input type="text" class="form-control" id="from" name="from" value=""  placeholder="from" required autofocus>
  </div> -->
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"required autofocus>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea type="text" class="form-control" id="description" name="Description"  placeholder="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control-file" id="file" name="file" placeholder="Image">
  </div>
  
      <div style="margin-left:45%">
      <button class="btn btn-primary" type="submit"id="submit" name="submit">Submit</button>
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
    $image=$_FILES['file']['name'];
    $temp=$_FILES['file']['tmp_name'];
    $description=$_POST['description'];
    move_uploaded_file($temp,"image/$image");
    $query=mysqli_query($conn,"INSERT INTO review_page(name,email,description,image)values('$name','$email','$description','$image')");
    if($query){
        echo '<script>alert("data insert seccessfully.")</script>';
        //header('location:women_chef_page.php');
      }  
      else{
          echo '<script>alert("Some thing went to wrong.please try again.")</script>';
      } 
}

?>    