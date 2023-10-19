<?php
session_start();
include('include/header.php');
include('include/sidebar.php');
include('connectionf/bdf.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2" style="align:center;">Send Mail</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!-- <a class="btn btn-primary" href="add-customer.php"> Add Customer</a> -->
            </div>
          </div>
     
        <!-- table-->
        <div style="width:50% ;margin-left:25%; background-color:#EBE9E8 ">
        <form action="mess_reject_mail.php" method="post" style="margin:3%;padding:3%" id="flat_form"name="flat_form" enctype="multipart/form-data" >
         <!-- <div class="form-group">
    <label for="exampleInputEmail1">From</label>
    <input type="text" class="form-control" id="from" name="from" value=""  placeholder="from" required autofocus>
  </div> -->
  <div class="form-group">
    <label for="exampleInputEmail1">To</label>
    <input type="text" class="form-control" id="to" name="to" value="" placeholder="to"required autofocus>
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Booking Id</label>
    <input type="text" class="form-control" id="sub" name="sub" value="" placeholder="Booking id:"required autofocus>
  </div> -->
  
  <div class="form-group">
    <label for="exampleInputEmail1">Body</label>
    <textarea type="text" class="form-control" id="body"value=""  name="body" cols="30" rows="10" placeholder="description"></textarea>
  </div>
  
      <div style="margin-left:45%">
      <button class="btn btn-primary" type="submit"id="submit" name="send">Send</button>
      </div>    
    </form>
 </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

        </main>
      </div>
    </div>