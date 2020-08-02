<?php session_start();
$cid=$_SESSION['companyid'];
//$_SESSION['tid']=$_GET['tid'];

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>#TRICKS</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  
  
  
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
       setInterval(ref,5000);
    });
    
setInterval(function()
{ 
  //  $('#map-default').load("assets/js/components/maps/maps-default.js");
  $.ajax({
      type:"post",
      url:"refreshmaplat.php",
      success:function(data)
      {
          $('#map').attr('data-lat',data);
          window.map_lat=data;
      }
    });
    
    $.ajax({
      type:"post",
      url:"refreshmaplng.php",
      success:function(data1)
      {
       $('#map').attr('data-lng',data1);
       window.map_lon=data1;
      }
    });
},10000);

//time in milliseconds 



    </script>
  
  
  


 <!--
    function refreshTable(){
        $('#map-canvas').load('refreshmaplat.php', function(lat){
             $(this).attr("data-lat","lat");
           setInterval(refreshTable, 5000);
        });
        
        function refreshTable2(){
        $('#map-canvas').load('refreshmaplng.php', function(lng){
            $(this).attr("data-lng","lng");
           setInterval(refreshTable2, 5000);
        });
    }
</script>
  -->
  
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
            <li class="nav-item active">
              <a class="nav-link active" href="ware.php">
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
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['user'];?></span>
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
              <h6 class="h2 text-white d-inline-block mb-0">Warehouse Location</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Maps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Warehouses</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card border-0">
            <div id="map" class="map" data-lat="" data-lng="" style="height: 600px;"></div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  
   
  
  
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  
  <script>
  
   function initMap() {
     
  // The location of Uluru
 
  // The map, centered at Uluru
   var map = new google.maps.Map(
      document.getElementById('map'),{zoom: 17, center:{lat:11.6603276,lng:76.9954472}});
  // The marker, positioned at Uluru
/* var pos;
 ref= function(){$.ajax({
      type:"post",
      url:"refreshmaplatlng.php",
      success:function(data)
      {
       pos={lat:data[0],lng:data[1]};
      }
    });}
      */

 var marker = new google.maps.Marker({position:{lat:10.6603276 , lng:76.9954472},map:map});
  
 setInterval( () => {

   // marker.setMap(null);


      var pos = new google.maps.LatLng(window.map_lat,window.map_lon);
      
     marker.setPosition(pos);

     // var marker = new google.maps.Marker({position:pos,map:map});
       
      map.setCenter(pos);
     // map.setZoom(15);
    


 },2500);
}


    
  </script>
  
  <script>
function toggle() {
  document.getElementById("toggle1").click();
}
</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACDOnu32TPs4aNf6m3K8wGeY4m-TVRMAA&callback=initMap"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  
  
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
