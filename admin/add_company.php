<?php
session_start();
include('include/header.php');
include('include/slider.php');

?>



        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
           <li class="breadcrumb-item"><a href="add_company.php">Add Company</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <div id="msg"></div>
        <form action="#" method="post" style="margin:3%;padding:3%" id="customer-form"name="customer-form" >
         <h3 style="text-align:center">Add Company</h3>
      <div class="form-group">
        <label for="Company Name">Company Name</label>
        <input type="text"name="company_name"id="company_name" class="form-control" placeholder=" Enter Company Name" required autofocus>  
      </div>
      <div class="form-group">
        <label for="inputEmail">Description</label>
        <textarea type="text"name="description"id="description" class="form-control" placeholder="Enter Company Description" required autofocus> 
         </textarea>   
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
    <script>
       $(document).ready(function(){
       $("#submit").click(function(){
         var description=$("#description").val();
         if(description==''){
          alert('Please Enter description.');
          return false;
         }
         var company_name=$("#company_name").val();
         if(company_name==''){
          alert('Please Enter Company Name.');
          return false;
         }
          
          var data=$("#customer-form").serialize();

         $.ajax({
          type:"POST",
          url:"company_add.php",
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