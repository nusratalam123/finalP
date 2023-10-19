<?php
session_start();
include('connectionf/bdf.php');

include('include/header.php');
include('include/sidebar.php');
$id=$_GET['edit'];
$query=mysqli_query($conn,"select *from admin_login where id='$id'");
while($row=mysqli_fetch_array($query)){
    $email=$row['admin_email'];
    $password=$row['admin_pass'];
    $username=$row['username'];
    $firstname=$row['first_name'];
    $lastname=$row['last_name'];
    $admintype=$row['admin_type'];
}
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="customer.php">Customer</a></li>
           <li class="breadcrumb-item"><a href="add-customer.php">Upadate Customer</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Customer</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <div id="msg"></div>
        <form action="#" method="post" style="margin:3%;padding:3%" id="customer-form"name="customer-form" >
         <h3 style="text-align:center">Edit Customer Information</h3>
      <div class="form-group">
        <label for="Customer Email">Email address</label>
        <input type="email"name="email"id="email" value="<?php echo $email?>" class="form-control" placeholder="Customer Email address" required autofocus>  
      </div>
      <div class="form-group">
        <label for="inputEmail">Username</label>
        <input type="text"name="username"id="username" value="<?php echo $username?>"class="form-control" placeholder="Enter Username" > 
      </div>
      <div class="form-group">
        <label for="inputEmail">First name</label>
        <input type="text"name="firstname"id="first-name"value="<?php echo $firstname?>" class="form-control" placeholder="Enter first name" > 
      </div>
      <div class="form-group">
        <label for="inputEmail">Last Name</label>
        <input type="text"name="lastname"id="last-name"value="<?php echo $lastname?>" class="form-control" placeholder="Enter last Name" >
      </div>
      <div class="form-group">
        <label for="inputEmail">Password</label>
        <input type="text"name="password"id="password"value="<?php echo $password?>" class="form-control" placeholder="Enter password"> 
      </div>
      <div class="form-group">
        <label for="Admin Type">Admin Type</label>
        <select name="admin-type" id="admin-type" value="<?php echo $admintype?>" class="form-control">
         <option value="1">Super admin</option>   
         <option value="2">Customer admin</option>   
        </select>  
      </div>
      <input type="hidden" id="id" name="id"  value="<?php echo $_GET['edit'];?>">


      <div style="margin-left:45%">
      <input class="btn btn-primary" type="submit"id="submit" name="submit" placeholder="update">
      </div>
      
    </form>
 </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
         $('#example').DataTable();
         });
    </script>
    
  </body>
</html>

<?php
include('connectionf/bdf.php');

if(isset($_POST['submit']))
{
  $id=$_POST['id'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $password=$_POST['password'];
  $admintype=$_POST['admin-type'];
  $query1=mysqli_query($conn,"update admin_login set admin_email='$email',admin_pass='$password',
  username='$username',first_name='$firstname',last_name='$lastname',admin_type='$admintype' where id='$id'");

  if($query1){
    echo "<script>alert('record update successfully.')</script>";

  }
  else{
    echo "<script>alert('try again.')</script>";

  }

}    

?>