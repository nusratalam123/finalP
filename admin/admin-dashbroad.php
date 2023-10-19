<?php
 session_start();
if($_SESSION['email']==true){
 
}
else{
     header('location:../loginf/loginpage.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="../admin/css/assets/img/apple-icon.png">
<title> admin_dashbroad</title>

<link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard" />

<meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Material Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, free dashboard, free admin dashboard, free bootstrap 5 admin dashboard">
<meta name="description" content="Material Dashboard 2 is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Material Dashboard 2 by Creative Tim">
<meta name="twitter:description" content="Material Dashboard 2 is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/material-dashboard.jpg">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Material Dashboard 2 by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://demos.creative-tim.com/material-dashboard/pages/dashboard.html" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/material-dashboard.jpg" />
<meta property="og:description" content="Material Dashboard 2 is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you." />
<meta property="og:site_name" content="Creative Tim" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<link href="../admin/css/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="../admin/css/assets/css/nucleo-svg.css" rel="stylesheet" />

<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<link id="pagestyle" href="../admin/css/assets/css/material-dashboard.min.css?v=3.1.0" rel="stylesheet" />
</head>
</html>
<?php
include('include/header.php');
include('include/sidebar.php');
?>

   
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <div class="card-deck">
  <div class="card">
    <img src="../imagef/messf.jpg" class="card-img-top" alt="...">
    <div class="card-footer">
    <a href="admin_mess_page.php" class="btn btn-primary" style="padding:4%;margin-left:25%">Go here</a>
    </div>
  </div>
  <div class="card">
    <img src="../imagef/flatf.jpg" class="card-img-top" alt="...">
    <div class="card-footer">
    <a href="admin_flat.php" class="btn btn-primary" style="padding:4%;margin-left:25%">Go here</a>
    </div>
  </div>
  <div class="card">
    <img src="../admin/image/chef2.jpg" class="card-img-top" alt="...">
    <div class="card-footer">
    <a href="admin_women.php" class="btn btn-primary" style="padding:4%;margin-left:25%">Go here</a>
    </div>
  </div>
  <div class="card">
    <img src="../image/truck101.jpg" class="card-img-top" alt="...">
    <div class="card-footer">
    <a href="admin_vehicle_page.php" class="btn btn-primary" style="padding:4%;margin-left:25%">Go here</a>
    </div>
  </div>
</div>
 <h1>Summery of user</h1>         
<div class="container-fluid py-4">
<div class="row">
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
<!-- <i class="material-icons opacity-10">weekend</i> -->
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
  <?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `mess_info`";
  $countall=$conn->query($sql);
  $rowcount=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize">Number of mess users</p>
<h4 class="mb-0"><?php echo $rowcount;?></h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last month</p>
</div>

</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `flat_info`";
  $countall=$conn->query($sql);
  $rowcount1=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize">Number of Flat users</p>
<h4 class="mb-0"><?php echo $rowcount1;?></h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `women_book`";
  $countall=$conn->query($sql);
  $rowcount2=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize"> Women chef users</p>
<h4 class="mb-0"><?php  echo $rowcount2;?></h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">2%</span> last month</p>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
<!-- <i class="material-icons opacity-10">weekend</i> -->
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `mess_book`";
  $countall=$conn->query($sql);
  $rowcount3=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize">NUmber of vehicle users</p>
<h4 class="mb-0"><?php echo $rowcount3?></h4>
</div>
</div>
<hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>last month</p>
</div>
</div>
</div>
</div>
<h3>Summery of Booking</h3>         
<div class="container-fluid py-4">
<div class="row">
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
<!-- <i class="material-icons opacity-10">weekend</i> -->
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
  <?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `mess_book`";
  $countall=$conn->query($sql);
  $rowcount11=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize">Number of mess users</p>
<h4 class="mb-0"><?php echo $rowcount11;?></h4>
</div>
</div>
<!-- <hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
</div> -->

</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `flat_book`";
  $countall=$conn->query($sql);
  $rowcount12=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize">Number of Flat users</p>
<h4 class="mb-0"><?php echo $rowcount12;?></h4>
</div>
</div>
<!-- <hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
</div> -->
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `women_chef_info`";
  $countall=$conn->query($sql);
  $rowcount13=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize">Number of women chef users</p>
<h4 class="mb-0"><?php  echo $rowcount13;?></h4>
</div>
</div>
<!-- <hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
</div> -->
</div>
</div>
<div class="col-xl-3 col-sm-6">
<div class="card">
<div class="card-header p-3 pt-2">
<div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
<!-- <i class="material-icons opacity-10">weekend</i> -->
<i class="material-icons opacity-10">person</i>
</div>
<div class="text-end pt-1">
<?Php
    include('connectionf/bdf.php');
  $sql="SELECT * FROM `vehicle_info`";
  $countall=$conn->query($sql);
  $rowcount14=mysqli_num_rows($countall);
  ?>
<p class="text-sm mb-0 text-capitalize">NUmber of vehicle users</p>
<h4 class="mb-0"><?php echo $rowcount14?></h4>
</div>
</div>
<!-- <hr class="dark horizontal my-0">
<div class="card-footer p-3">
<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
</div> -->
</div>
</div>
</div>

<!-- <div class="row">
<div class="col-lg-4 col-md-6 mt-4 mb-4">
<div class="card z-index-2 ">
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
<div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
<div class="chart"> -->
<?php
 
$dataPoints = array( 
	array("y" => $rowcount, "label" => "Mess" ),
	array("y" => $rowcount1, "label" => "Flat" ),
	array("y" => $rowcount2, "label" => "Women" ),
	array("y" => $rowcount3, "label" => "Vehicle" )
);
$dataPoint1 = array( 
	array("y" => $rowcount, "label" => "Mess" ),
	array("y" => $rowcount1, "label" => "Flat" ),
	array("y" => $rowcount2, "label" => "Women" ),
	array("y" => $rowcount3, "label" => "Vehicle" )
);
$dataPoint2 = array( 
	array("label"=>"Total user", "y"=>$rowcount),
	array("label"=>"mess user", "y"=>$rowcount1),
	array("label"=>"Flat user", "y"=>$rowcount2),
	array("label"=>"Women", "y"=>$rowcount3),
  array("label"=>"vehicle", "y"=>$rowcount),
	array("label"=>"book mess", "y"=>$rowcount11),
	array("label"=>"book flat", "y"=>$rowcount12),
	array("label"=>"book women", "y"=>$rowcount13)
)

 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "User Graph"
	},
	axisY: {
		title: "rate of change"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Bookig Graph"
	},
	axisY: {
		title: "rate of change"
	},
	data: [{
		type: "line",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoint1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
var chart = new CanvasJS.Chart("chartContainer2", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "over all summary of website",
    text: "over all summary of website",

	},
  subtitles: [{
		text: "july 2023"
	}],
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoint2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
 
}
</script>
</head>
<body>
<div class="row" style="padding-top:5%;">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
          <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
          <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
      </div>
    </div>
  </div>
</div>
<div id="chartContainer2" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>        

<canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
<!-- </div>
</div>
</div>
<div class="card-body">
<h6 class="mb-0 ">Website Views</h6>
<p class="text-sm ">Last Campaign Performance</p>
<hr class="dark horizontal">
<div class="d-flex ">
<i class="material-icons text-sm my-auto me-1">schedule</i>
<p class="mb-0 text-sm"> campaign sent 2 days ago </p>
</div>
</div>
</div>
</div> -->

        </main>
      </div>
    </div> 
  </body>
</html>