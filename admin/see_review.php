<?php
session_start();
include('include/header.php');
include('include/sidebar.php');

?>

<style>
  a {
   padding:8px 16px;
   border:1px solid #2F303D;
   color:black;
   font-weight:bold;
  }
  a:hover {
  background-color: #E2E3EC;
}
  </style>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Review Page</h1>
          <div class="d-flex justify-content-between" style="gap:10px">
          <div class="btn-toolbar" style='gap:10px'>
             <!-- <a class="btn btn-primary" href="own_women.php">own Post</a> -->
              <a class="btn btn-primary" href="review_page.php">Add Review</a>
            </div>
          </div>
          </div>
        <!-- table-->
        <div class="container py-2">
            <div class="row mt-4">

            <?php
           include('connectionf/bdf.php');
           $r_p_page=3;
     if (isset($_GET['values'])) 
     {
        $st_page=$_GET['values'];

     }
     else{
        $st_page=3;
     }
   // $st_page=3;
      $sql="SELECT *FROM `review_page` limit $st_page, $r_p_page";

     $result=$conn->query($sql);
           
           while($row=$result->fetch_assoc()) {

         ?>
         <div class="col-md-4" style="padding-bottom:3%">
                 <div class="card">
                 <img src="image/<?php echo $row['image']?>" class="card-img-top" alt="...">
                 <div class="card-body">
                  <h5 class="card-title"><?php echo $row['name'];?></h5>
                 <p class="card-text"><?php echo $row['description']?></p>
               </div>
                </div>
             </div>    
  
         <?php 
         }
         
         ?>      
            

            </div>

        </div>
        <div align="center">
    <br />
    <?php
     $sql="SELECT * FROM `review_page`";
     $countall=$conn->query($sql);
     $rowcount=mysqli_num_rows($countall);
   
     $__page=ceil($rowcount*1.0/3);
     $start_loop=$st_page/3;

     $last_val=($__page-1) * 3;
     
     $start_SH=$start_loop + 2;

     if ($__page-1 <= $start_SH) 
      {
         $end_loop = $__page;
      }else{
         $end_loop = $start_SH;
      }

     if ($st_page > 3) 
     {
        echo "<a href='see_review.php?values=5'>First</a>";
        echo "<a href='see_review.php?values=".($st_page-3)."'><<</a>"; 
     }
    
   
    for ($i=$start_loop;$i <=$end_loop; $i++) 
     { 
     
        $hide_values=$i*3;
        echo "<a href='see_review.php?values=".$hide_values."'>".ceil($i)."</a>";
       
     }

   if ($__page-1 != $start_loop) 
      {
        echo "<a href='see_review.php?values=".($st_page+3)."'>>></a>";
        echo "<a href='see_review.php?values=".$last_val."'>Last</a>";
      }
   
    ?>
    </div>
    <br>
    <br>
   </div>
  
        </main>


     
    
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