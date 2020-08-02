<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
 
  <title>#TRICKS</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.ico" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
 <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">

	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
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
          <ul class="navbar-nav">
            <li class="nav-item">
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
            <li class="nav-item active">
              <a class="nav-link active" href="alert.php">
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
          Contact us @ hashtricks2020@gmail.com
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
  <!--Model-->
  <div class="modal" id="newModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Customer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       

        <!-- Modal body -->
        <div class="modal-body">
          	

          <div class="form-group">
            <label for="exampleInputName">Customer Name</label>
            <input type="text" name="cusname" class="form-control" id="exampleInputName" placeholder="Enter Customer Name" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputName">Company Name</label>
            <input type="text" name="compname" class="form-control" id="exampleInputName" placeholder="Enter Comapany Name" required="required">
          </div>
          
        
          <div class="form-group">
            <label for="exampleInputName">Phone</label>
            <input type="text" name="cusoh" class="form-control" id="exampleInputName" placeholder="Enter Customer Phone Number" required="required">
          </div>
          
          <div class="form-group">
            <label for="exampleInputName">Email</label>
            <input type="text" name="cusemail" class="form-control" id="exampleInputName" placeholder="Enter customber email">
          </div>
          
           <div class="form-group">
            <label for="exampleInputName">Address</label>
            <input type="text" name="cusadd" class="form-control" id="exampleInputName" placeholder="Enter Customer Address" required="required">
            </div>
           <div class="form-group">
            <label for="exampleInputName">GST No (optional)</label>
            <input type="text" name="gst" class="form-control" id="exampleInputName" placeholder="Enter Customer GST number">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button><span></span>
          <button type="submit" class="btn btn-danger">Cancel</button>
        </form>
    </div> 
        </div>        
       </div>
        
      </div>
      
       <!--Model-->
  <div class="modal" id="EditModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Customer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
       

        <!-- Modal body -->
        <div class="modal-body">
          	

          <div class="form-group">
            <label for="exampleInputName">Customer Name</label>
            <input type="text" name="cusname" class="form-control" id="exampleInputName" placeholder="Enter Customer Name" required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputName">Company Name</label>
            <input type="text" name="compname" class="form-control" id="exampleInputName" placeholder="Enter Comapany Name" required="required">
          </div>
          
        
          <div class="form-group">
            <label for="exampleInputName">Phone</label>
            <input type="text" name="cusoh" class="form-control" id="exampleInputName" placeholder="Enter Customer Phone Number" required="required">
          </div>
          
          <div class="form-group">
            <label for="exampleInputName">Email</label>
            <input type="text" name="cusemail" class="form-control" id="exampleInputName" placeholder="Enter customber email">
          </div>
          
           <div class="form-group">
            <label for="exampleInputName">Address</label>
            <input type="text" name="cusadd" class="form-control" id="exampleInputName" placeholder="Enter Customer Address" required="required">
            </div>
           <div class="form-group">
            <label for="exampleInputName">GST No (optional)</label>
            <input type="text" name="gst" class="form-control" id="exampleInputName" placeholder="Enter Customer GST number">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button><span></span>
          <button type="submit" class="btn btn-danger">Cancel</button>
        </form>
    </div> 
        </div>        
       
        
      </div>
    </div>

    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
            <li class="nav-item d-xl-none">
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
                    <span class="shortcut-media avatar rounded-circle bg-gradient-grey">
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
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo$_SESSION['user'];?></span>
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
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Alerts</a></li>
                 
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
               <!--     <button  data-toggle="modal" data-target="#newModal" class="btn btn-success btn-sm rounded-0" type="button" data-placement="top" title="Add Customer">Add Customer <i class="fa fa-edit"></i></button>-->
          
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Alerts</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                   <th scope="col" class="sort" data-sort="id">Consignment ID</th>
                   <th scope="col" class="sort" data-sort="comapany_name">Consignee</th>
                    <th scope="col" class="sort" data-sort="name">Truck No</th>
                    
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">lat</th>
                    <th scope="col">log</th>
                    <th scope="col">Snap</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
             <?php
                 $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    
              $query = "SELECT * FROM `alerts`";
       $result=mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        
 
             echo "<tr><td>".$row["consignid"]."
                    </td>
                    <td>".$row["consignee"]."</td>
                   <td>
                      ".$row["truckno"]."
                      </td><td >
                      ".$row["date"]."
                    </td> <td>".$row["time"]."</td>
                    <td >
                     ".$row["latitude"]."
                    </td>
                    <td>".$row["logitude"]."</td>
                   
                    <td>".$row["snap"]."</td>
                    
                    
                    <td>
                 <button type='button' data-toggle='modal' data-target='#EditModal' class='fas fa-pen btn-primary'></button>
                    
                      <button type='button'  data-toggle='tooltip' data-placement='top' title='Delete'  class='fa fa-trash btn-danger'>                 </button>
                    </td>
                  </tr>";
    }
    $result->free();
} 
                    ?>
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
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