<?php
session_start();
include('include/header.php');
include('include/sidebar.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <title>Booking Page</title>
    <link rel="stylesheet" href="/admin/css/booking.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<h1 class="d-flex justify-content-center">Data Collector Page</h1>
<div class="new" style="display:flex;margin-left:13%;padding:5%;gap:1rem">
<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Add Mess</h5>
    <a href="add_mess.php" class="btn btn-primary">Add Mess Information</a>
  </div>
</div>

<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Add Flat</h5>
    <a href="add_flat.php" class="btn btn-primary">Add Flat Information</a>
  </div>
</div>

<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Add Chef</h5>
    <a href="add_women_chef.php" class="btn btn-primary">Add Chef Information</a>
  </div>
</div>
<div class="card text-white bg-secondary mb-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Add Vehicle </h5>
    <a href="add_vehicle.php" class="btn btn-primary">Add Vehicle Information</a>
  </div>
</div>
</div>
