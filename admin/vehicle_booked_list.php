<?php
session_start();
include('include/header.php');
include('include/sidebar.php');

?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="width:100%">
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="/homef/homef.php">Home</a></li>
           <li class="breadcrumb-item"><a href="admin-dashbroad.php">Dashbroad</a></li>
           <li class="breadcrumb-item"><a href="booking.php">Booked Page</a></li>
           </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Flat Booked List</h1>
          </div>
        <!-- table-->
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#Serial no:</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
           include('connectionf/bdf.php');

           $query=mysqli_query($conn,"select * from booked_vehicle");
           while($row=mysqli_fetch_array($query)){

         ?> 
         <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td>
                  <div class="row" style="margin-left:4%;">
                    <div class="btn-group">
                      <a href="flat_book_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </div>
                     
                  </div>
                </td>
        </tr> 
         <?php }
         
         ?>       
        </tbody>
        <tfoot>
            <tr>
               <th>#Serial no:</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
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