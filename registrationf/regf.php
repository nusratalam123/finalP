<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    <link rel="stylesheet" href="regstylef2.css">
</head>
<body>
    
    <!-- <div class="home_img">
      <div class="img"> <img src="../imagef/home.jpg">  </div>  
    </div> -->
    <div class="form">
    <form action="signupf.php" method="post" id="signup" novalidate>
    
    <h1>Signup</h1>
    <div class="input-style">
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" placeholder="Enter your valid email">
        </div>
        
        <div>
            <label for="name">First name</label>
            <input type="text" id="first-name" name="firstname" placeholder="Enter your first name">
        </div>
        <div>
            <label for="name">Last Name</label>
            <input type="text" id="last-name" name="lastname" placeholder="Enter your last name">
        </div>
        
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        
        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-type password again">
        </div>
        <div class="form-group">
        <label for="Admin Type">Customer</label>
        <select name="admin-type" id="admin-type" class="form-control">
         <!-- <option value="1">Super admin</option>    -->
         <option value="2">Customer</option>   
        </select>  
      </div>
    </div>  
    <div class="submit">
       <input class="btn btn-lg btn-primary btn-block" type="submit"id="submit" name="submit" placeholder="sign in">
    </div>
   

    <p>Have an account?? <a href="../loginf/loginpage.php"> <b> login</b></a> </p>
    <p>OR, <a href="../homef/homef.php"> <b> GO HOME</b></a> </p>
    </form>
    </div>
    <script>
       $(document).ready(function(){
       $("#submit").click(function(){
         var email=$("#email").val();
          var firstname=$("#first-name").val();
          var lastname=$("#last-name").val();
         
          var password=$("#password").val();
          var admintype=$("#admin-type").val();
          var data=$("#customer-form").serialize();

         $.ajax({
          type:"POST",
          url:"signupf.php",
          data:data,
          success:function(data){
           alert(data);
          }
         })
       });
       });
    </script>
</body>
</html>
