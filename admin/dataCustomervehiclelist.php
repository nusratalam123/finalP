
<?php
session_start();
include('include/header.php');
include('include/sidebar.php');

?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Vehicle booking Customer Information</h1>
          <div class="d-flex justify-content-between" style="gap:10px">
          <!-- <div class="btn-toolbar">
              <a class="btn btn-primary" href="add_flat.php">Add flat Post</a>
            </div> -->
          </div>
          </div>
        <!-- table-->
        <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#Serial no:</th>
                <th>Customer Name</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($_SESSION['email']=='datacollector33@gmail.com'){
           include('connectionf/bdf.php');
           $query=mysqli_query($conn,"select * from flat_book where living_area='airport'");
           while($row=mysqli_fetch_array($query)){

         ?> 
         <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
        </tr> 
           
         <?php }
        }
        else if($_SESSION['email']=='datacollector34@gmail.com'){
            include('connectionf/bdf.php');
           $query=mysqli_query($conn,"select * from flat_book where living_area='Uttara'");
           while($row=mysqli_fetch_array($query)){

         ?> 
         <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
        </tr> 
           
         <?php } 
        }
         
         ?>       
        </tbody>
        <tfoot>
            <tr>
                <th>#Serial no:</th>
                <th>Customer Name</th>
                <th>Phone Number</th>
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