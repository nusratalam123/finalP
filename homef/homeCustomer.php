<?php
session_start();
if($_SESSION['email']==true){
 
}
else{
     header('location:../loginf/loginpage.php');
}
// $conn=mysqli_connect("localhost","root","","bechalor_accomodation");
// $query=mysqli_query($conn,"select * from admin_login");
// if ($query) {
   
// $email=$_SESSION['email'];
// }


// if(isset($_POST['submit'])){

//   $email=$_POST['email'];
//   $password=$_POST['password'];

//   $query=mysqli_query($conn,"select * from admin_login where admin_email='$email'and admin_pass='$password'");
  
//   if($query) {
//     $_SESSION['email']=$email;
//   if(mysqli_num_rows($query)>0){

//     header('location:../homef/homef.php');
//   }
//   else{
//     echo "<script>alert('please try again')</script>";
//   }

// }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <title>Home Page</title>
    <link rel="stylesheet" href="homefstyle1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

   <!--naive bar-->
   <div class="section">
    <div class="top" id="top-section">
      <h1 class="header">Bachelor Accomodation</h1>
      <div class="navbar-container">
          <ul>
            <li><a href="homef.php">Home</a> </li>
            <li><a href="../admin/user_dashbroad.php">Dashbroad</a></li>
            <li><a href="../aboutf/aboutusf.php">About us</a></li>
            <li><a href="../admin/review_page.php">Review</a></li>

            <li><b><?php if ($_SESSION['email']): ?>
        
         <?= htmlspecialchars($_SESSION['email']); ?></b></li>
        
       <li> <a href="../loginf/logout.php">Log out</a></li>
       
        
       <li><?php else: ?>
        
        <p><a href="../loginf/loginpage.php">Log in</a> <a href="../registrationf/regf.php">Register</a></p>
        
    <?php endif; ?></li>

           
          </ul>
      </div>
     </div>
      
      
        <div class="text-container">
          <div class="main-text">
            <h1>Bachelor Accomodation</h1>
          </div>
          <div  class="sub-text">
            <h4>This is solution of bachelor problem..<br>for this wibsite.. You can find  single room,<br>Flat ,women cheaf,advantage of vehicles etc.</h4>
          </div>
        </div>
  </div>



      <!--srvices -->
      <div class="section-2">
        <div class="sec-h">
        <h1 style="text-align:center;padding-top: 30px;">Available Services </h1>

        </div>
        <div class="card-container">
          <div class="card-inter">
            <img src="../imagef/messf.jpg" alt="">
            <div class="card-2">
              <h4 style="text-align:center;">Mess</h4>
              <a href="../admin/mess_page.php" class="btn btn-primary">Go Here</a>
            </div>
          </div>
          <div class="card-inter">
            <img src="../imagef/flatf.jpg" alt="">
            <div class="card-2" >
              <h4 style="text-align:center;">Flat</h4>
              <a href="../admin/flat_page.php" class="btn btn-primary">Go Here</a>
            </div>
          </div>
          <div class="card-inter">
            <img src="../imagef/womenf.jpg" alt="">
            <div class="card-2">
              <h4 style="text-align:center;">Chef</h4>
              <a href="../admin/women_chef_page.php" class="btn btn-primary">Go Here</a>
            </div>
          </div>
          <div class="card-inter">
            <img src="../imagef/truckf.png" alt="">
            <div class="card-2">
              <h4 style="text-align:center;">vehicle</h4>
              <a href="../admin/vehicle_page.php" class="btn btn-primary">Go Here</a>
            </div>
          </div>
        </div>
      </div>
       <!--end services-->
   <!--review-->
   <div class="review-section">
    <h1 style="text-align:center">Reviews </h1>
    <div class="card-container">
      <div class="card-inter">
        <img src="../imagef/boy1f.jpg" alt="">
        <div class="card-2">
          <h5 class="card-title">This website really helpful.For this website easily find the single room</h5>
        </div>
      </div>
      <div class="card-inter">
        <img src="../imagef/boy2f.jpg" alt="">
        <div class="card-2" >
          <h5>This website solve accomodation problem..not only accomodation but also women chef </h5>
        </div>
      </div>
      <div class="card-inter">
        <img src="../imagef/girlf.jpg" alt="">
        <div class="card-2">
          <h5>It is wonderful website for solution of bechalor problem .</h5>
        </div>
      </div>
    </div>
  </div>
  <!--end review-->
    <div class="more-content">
      <a  href="../admin/see_review.php">More Reviews</a>
    </div>
   <!--footer-->
   <div class="footer">
    <div>
      <h1>Contact</h1>
      <p>15162</p>
      <p>Bechalorsheba@gmail.com</p>
      <p>Corporate Address</p>
      <p>House # 57, Road # 25, Block - A,</p>
      <p>Banani, Dhaka 1212</p>
    </div>
    <div>
      <h1>Other page</h1>
      <p>Blog</p>
      <p>Trems of use</p>
      <p>Privacy policy</p>
      <p>sitemap</p>
      <p>help</p>
    </div>
    <div>
      <h1>Company</h1>
      <p>SManager</p>
      <p>sBusiness</p>
      <p>scompany</p>
      <p>sdelivery</p>
      <p>sbondhu</p>
    </div>
    <div>
      <h1>Download Our App</h1>
      <p>Tackle your to-do list wherever you are with our</p>
      <p>mobile app & make your life easy.</p>
      <div class="footer-img"style="display: flex;">
        <img src="../imagef/app-storef.png" alt="">
        <img src="../imagef/play-storef.png" alt="">
      </div>
      <div class="footer-icon">
        <i class="fa-brands fa-square-facebook"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-google"></i>
      </div>
    </div>
   </div>
    <!--end footer-->
</body>
</html>