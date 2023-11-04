<?php
session_start();
// $is_invalid = false;

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
//     $mysqli = require __DIR__ . "/dbf.php";
    
//     $sql = sprintf("SELECT * FROM admin_login
//                     WHERE email = '%s'",
//                    $mysqli->real_escape_string($_POST["email"]));
    
//     $result = $mysqli->query($sql);
    
//     $user = $result->fetch_assoc();
    
//     if ($user) {
        
//         if (password_verify($_POST["password"], $user["password_hash"])) {
        
//             echo '<script>alert("Registration complete")</script>';
           
            
//             session_regenerate_id();
            
//             $_SESSION["user_id"] = $user["id"];
           
//             $_SESSION['email']=$email;
//             header("Location: ../adminf/admin_dashbroad.php");
           
            
//             exit;
//         }
   
        
//     }
    
//     $is_invalid = true;
// }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="loginpagef2.css">
</head>
<body>
<div class="log"> 
     <h1>Login</h1>
     
  <!-- <?php  echo '<script>alert("Registration completed.now you can login.")</script>';?>
  <div class="log"> 
     <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    
    <?php endif; ?> -->
    
    
    
    <form method="post" action="loginpage.php">
        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="Enter your name"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        
        <input class="btn btn-lg btn-primary btn-block" type="submit"id="submit" name="submit" placeholder="sign in">
        <p>Have not an account??
        <a href="../registrationf/regf.php"> <b> Register</b></a> </p>
        Or<a href="../homef/home.php"> <b> Go Home</b></a> </p>
    </form>
  </div>
  <!-- <div style="height:10%;margin-left:5%; gap:10%;width:20%;color:black">

  <a class="nav-link active" href="../homef/homef.php">
  <span class="material-icons">
home
</span>
    </a>
  </div> -->
    </div>
</body>
</html>
<?php
//include('connectionf/bdf.php');
$conn=mysqli_connect("localhost","root","","bechalor_accomodation");

if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $password=$_POST['password'];
  $type=$_POST[''];

  $query=mysqli_query($conn,"select * from admin_login where admin_email='$email'and admin_pass='$password'and admin_type='1'");
  $query1=mysqli_query($conn,"select * from admin_login where admin_email='$email'and admin_pass='$password'and admin_type='2'");
  $query2=mysqli_query($conn,"select * from data_collector where email='$email'and password='$password'");
  
  if($query) {
    $_SESSION['email']=$email;
  if(mysqli_num_rows($query)>0){

    header('location:../homef/homef.php');
  }
  else if(mysqli_num_rows($query1)>0){
    $_SESSION['email']=$email;
    header('location:../homef/homeCustomer.php');
  }
  else if(mysqli_num_rows($query2)>0){
    $_SESSION['email']=$email;
    header('location:../homef/homeDataCollector.php');
  }
  else{
    echo "<script>alert('please try again')</script>";
  }

}
}
?>







