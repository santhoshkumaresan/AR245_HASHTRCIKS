<?php
session_start();

 $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    

              $query = "SELECT * FROM company where id ={$_SESSION['companyid']}";
       $result=mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $companyname = $row["companyname"];
        $spoc = $row["spoc"];
        $phone = $row["phone"];
        $email = $row["email"];
        $address = $row["address"]; 
        $idtype = $row["idtype"];
        $idno = $row["idno"];
    
    }
    
}

    $result->free();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>#TRICKS</title>
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.ico" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/opensans-font.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script> var old_count = 0;
var i = 0;
setInterval(function(){    
$.ajax({
    type : "POST",
    url : "alertnotifi.php",
    success : function(data){
        //console.log(data);
        if (data > old_count) { if (i == 0){old_count = data;} 
            else{
            alert('Alert!');
            window.location="alert.php";
            old_count = data;}
        } i=1;
    }
});
},20000);</script>
    
    
 <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">

	<!-- Main Style Css
    <link rel="stylesheet" href="css/style.css"/> -->
    <!--FAQ CSS-->
    
    <style>
        
        h2 {
    font-family: Arial, Verdana;
    font-weight: 800;
    font-size: 2rem;
    
    color: #091f2f;
    text-transform: uppercase;
}
.accordion-section .panel-default > .panel-heading {
    border: 0;
    background: #5e72e4;
    padding: 0;
}
.accordion-section .panel-default .panel-title a {
    display: block;
    font-style: italic;
    font-size: 1rem;
}
.accordion-section .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 3rem;
   
    color: #147de2;
    float: right;
    margin-top: -12px;
}

.accordion-section .panel-default .panel-body {
    font-size: 1.2rem;
}
    </style>
    
    
    
    
    
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  	<link rel="stylesheet" type="text/css" href="../login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login/css/main.css">
</head>

<body>
  <!-- Sidenav -->
       <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)" onclick="toggle()">
          <img src="assets/img/brand/T.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav active">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <i class="ni ni-sound-wave text-primary"></i>
                <span class="nav-link-text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="track.php">
                <i class="ni ni-square-pin text-orange"></i>
                <span class="nav-link-text">Track</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="alert.php">
                <i class="ni ni-bell-55 text-yellow"></i>
                <span class="nav-link-text">Alerts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fleet.php">
                <i class="ni ni-delivery-fast text-primary"></i>
                <span class="nav-link-text">Fleets</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="customer.php">
                <i class="ni ni-single-02 text-orange"></i>
                <span class="nav-link-text">Customers</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reverse.php">
                <i class="ni ni-square-pin text-yellow"></i>
                <span class="nav-link-text">Reverse Logistics</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ware.php">
                <i class="ni ni-basket text-orange"></i>
                <span class="nav-link-text">Warehouse</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="estimator.php">
                <i class="ni ni-money-coins text-yellow"></i>
                <span class="nav-link-text">Bill Estimator</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../rfid/home.php">
                <i class="ni ni-tag text-primary"></i>
                <span class="nav-link-text">RFID</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report.php">
                <i class="ni ni-single-copy-04 text-orange"></i>
                <span class="nav-link-text">Reports</span>
              </a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="setting.php">
                <i class="ni ni-settings text-yellow"></i>
                <span class="nav-link-text">Settings</span>
              </a>
            </li>
            
            
            
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
      <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Support</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Contact us @ Hashtricks2020@gmail.com
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none" >
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner" id="toggle1">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3"> <h6 class="text-sm text-muted m-0">You have no new notifications.</h6>
                </div>
                
                <!-- View all 
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>-->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="index.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-sound-wave"></i>
                    </span>
                    <small>Home</small>
                  </a>
                  
                  <a href="track.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-square-pin"></i>
                    </span>
                    <small>Track</small>
                  </a>
                  <a href="alert.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-bell-55"></i>
                    </span>
                    <small>Alerts</small>
                  </a>
                  <a href="fleet.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-delivery-fast"></i>
                    </span>
                    <small>Fleets</small>
                  </a>
                  <a href="customer.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-single-02"></i>
                    </span>
                    <small>Customers</small>
                  </a>
                  <a href="report.php" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-single-copy-04"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/brand/T.png">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION["user"];?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#myModal" data-toggle="modal" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>

                
                <div class="dropdown-divider"></div>
                <a href="../login/index.php" class="dropdown-item" >
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
             
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                </ol>
              </nav>
            </div>
           
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">TOTAL LOAD</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-box-2"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Lost</h5>
                      <span class="h2 font-weight-bold mb-0">2</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-bold-down"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-danger mr-2"><i class="fa fa-arrow-down"></i> </span>
                    <span class="text-nowrap"></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">₹ 9,24,900</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49.50%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
 
    <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <center><h3 class="text-white mb-0">Company Profile</h3></center>
            </div>
            <div class="table-responsive">
              <table   class="table align-items-center table-dark table-flush" >
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort">Company Name</th><th style="color: white;"><?php echo $companyname; ?></th></tr><tr>
                    <th scope="col" class="sort">SPOC Name</th><th style="color: white;"><?php echo $spoc; ?></th></tr><tr>
                    <th scope="col" class="sort">Phone</th><th style="color: white;"><?php echo $phone; ?></th></tr><tr>
                    <th scope="col" class="sort">Email</th><th style="color: white;"><?php echo $email; ?></th></tr><tr>
                    <th scope="col" class="sort">Address</th><th style="color: white;"><?php echo $address; ?></th></tr><tr>
                    <th scope="col">ID Type</th><th style="color: white;"><?php echo $idtype; ?></th></tr><tr>
                    <th scope="col">ID no</th><th style="color: white;"><?php echo $idno; ?></th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
       
       
	<section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
  <div class="container">
  
	 <h2  style="text-align:center;">  Frequently Asked Questions </h2>
	  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
				What is #TRACK?
			  </a>
			</h3>
		  </div>
		  <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
			<div class="panel-body px-3 mb-4">
			  <p>#TRACK is a Portable Cost Effective digital solution which includes IoT-cloud based tracking system that provides seamless monitoring and delivering of fleets at consignment level. This connected fleet model consists of vehicle and package tracking system with fleet management software which enables total control of the consignments with essential alerts and statistics. </p>
			 
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
					What are the benefits of #TRACK?
			  </a>
			</h3>
		  </div>
		  <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
			<div class="panel-body px-3 mb-4">
			  <p>This IoT-cloud based web application provides the best and secured tracking facility and restricts the unnecessary losses due to theft and ensures that no goods are lost in transit.</p>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
			How #TRACK Works?
			  </a>
			</h3>
		  </div>
		  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
			<div class="panel-body px-3 mb-4">
			  <p>This uses Hybrid Technology uses Gen2 UHF RFID Technology and IoT based Camera sensor for monitoring. When RF signal gets triggered, the IoT Module captures the specific package id and an Alert will be given with a live location and an image clip captured during the loss. #Track also (Reverse Logistics, Eliminate vehicle idle time, Dynamic route planning, Package Manifest, etc.,). </p>
			</div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
			<h3 class="panel-title">
			  <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
				Dependencies of #TRACK?
			  </a>
			</h3>
		  </div>
		  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
			<div class="panel-body px-3 mb-4">
			  <p>It depends on, Gen2 930MHz Ultra High Frequency Rfid Trans-receiver and Label;IoT Image Sensor;GPS;GSM ; LoRa Wifi;Google Maps SDK;Internet...</p>
			</div>
		  </div>
		</div>
	  </div>
  
  </div>
</section>

 <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">#Tricks</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">#Track</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
   
       </div>
  <!--Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->

  <script src="assets/js/argon.js?v=1.2.0"></script>
<script>
function toggle() {
  document.getElementById("toggle1").click();
}
</script>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "20f130ef-a766-492b-8ffa-3d94755abf66", // The ID of this integration.
      region: "jp-tok", // The region your integration is hosted in.
      serviceInstanceID: "e5beab45-3877-4116-a390-269d23bb2bb9", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

</body>
</html>