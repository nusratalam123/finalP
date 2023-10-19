
<?php
session_start();
include('include/header.php');
//include('include/sidebar.php');

?>

<?php
include('connectionf/bdf.php');
 
$id=$_GET["edit"];
$query=mysqli_query($conn,"SELECT * FROM mess_info where id='$id'");
while($row=mysqli_fetch_array($query)) {
$name=$row['post_name'];
$mobile=$row['mobile_no'];
$area=$row['area'];
$address=$row['address'];
$date=$row['date'];
$description=$row['description'];
$cost=$row['cost_room'];
$advance=$row['advance'];
$seat=$row['number_seat'];
$other=$row['others'];
$room_img=$row['image'];
$kitchen_img=$row['image_kitchen'];
$washroom_img=$row['image_washroom'];
}
?>    
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="../homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="admin_mess_page1.php">Mess Page</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Mess Page</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a class="btn btn-primary" href="add-mess.php">Add Mess Post</a>
            </div>
          </div>
        <!-- table-->
        <table id="example" class="display" style="width:100%">
        <?php
           include('connectionf/bdf.php');
           $login=$_SESSION['email'];
           $approve=$_GET['edit'];
           $id= $_GET['edit'];
          echo $id;
    $query=mysqli_query($conn,"INSERT INTO mess_approve(mess_id,name,mobile_no,address,date,description,cost,advance,seat,image,kitchen_img,
    washroom_img,area) SELECT  id,post_name,mobile_no,address,date,description,cost_room,advance,number_seat,others,image,image_kitchen,image_washroom,
    area FROM mess_info where mess_id=");
    if($query){
        echo '<script>alert("data insert seccessfully.")</script>';
        header('location:admin_mess_page1.php');
      }  
      else{
          echo '<script>alert("Some thing went to wrong.please try again.")</script>';
      } 
    
?>
    
  </body>
</html>