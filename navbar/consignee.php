<?php session_start();
//$cid=$_SESSION['companyid'];
if($_SERVER["REQUEST_METHOD"] == "POST")
$_SESSION['tid']=$_POST['number'];

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
      url:"refreshmaplati.php",
      success:function(data)
      {
          $('#map').attr('data-lat',data);
          window.map_lat=data;
      }
    });
    
    $.ajax({
      type:"post",
      url:"refreshmaplngi.php",
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

<body onload=setstatus()>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <span class="avatar avatar-sm">
                    <img alt="Image placeholder" src="assets/img/t3.png">
                  </span>&nbsp &nbsp
         <h6 class="h2 text-white d-inline-block mb-0">HASHTRACK</h6> <br><br>
        We Direct every Direction...
         
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
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">no new</strong> notifications.</h6>
                </div>
                
                 
                <!-- View all -->
             
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
               
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
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
                  <li class="breadcrumb-item"><a href="../index.html"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Track</a></li>
                 
                </ol>
              </nav>
              <h6 class="h2 d-inline-block mb-0">Track Your Consignment</h6>
               <div class="modal-body">
          <form method="POST" action="<?php $_PHP_SELF ?>" >

  <input type="radio" id="male" name="gender" value="male">
  <label for="male" class="h4 text-white">Consignment Number</label>&nbsp &nbsp &nbsp
  <input type="radio" id="female" name="gender" value="female">
  <label for="female" class="h4 text-white">Invoice Number</label></span><br>
<input type="text" name="number" class="form" id="exampleInputName" required="true">&nbsp &nbsp
         
         <button type="submit" class="btn btn-danger">Track!</button><span></span>
</form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    
    
    
      <div  id="tableholder" class="table-responsive" style="visibility:hidden;">
          <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Truck ID</th>
                    <th scope="col" class="sort" data-sort="budget">Kit ID</th>
                    <th scope="col" class="sort" data-sort="status">from</th>
                    <th scope="col">to</th>
                    <th scope="col" class="sort">Status</th>
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
    
        $query = "SELECT * FROM `track` where consignmentid={$_POST['number']}";
       $result=mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        
             echo " 
             <tr><td name='tid'>".$row["truckid"]."
                    </td>
                    
                   <td>
                      ".$row["kitid"]."
                    </td><td>
                     ".$row["from"]."
                    </td>
                    <td>".$row["to"]."</td>
                  <td>".$row["status"]."</td> 
                   
                  </tr>";
                  
               
    }
    $result->free();
} 
                   
             
?>
  </tbody>
                    </table>
             
            </div>
    <br><br><br>
    
    </div>
    
    <div class="container-fluid mt--6" id="xyz" style="visibility:hidden;">
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

<script>
    function checkStatus(){
        if (window.status="intransit")
        document.getElementById("xyz").style.visibility='visible';
        else
        document.getElementById("xyz").style.visibility='hidden';
    }
</script>
  
    <script>
    function setstatus(){
       window.status='';  
    }
     
  </script>
</body>

     <?php 

 $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $query = "SELECT * FROM `track` where consignmentid={$_POST['number']}";
       $result=mysqli_query($con, $query);
       if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    
                    if($row['status']=="intransit"){
              echo" <script>document.getElementById('xyz').style.visibility='visible';  </script>  "; 
               echo" <script>document.getElementById('tableholder').style.visibility='visible';  </script>  "; }
              else if($row['status']=="Completed"){
               echo" <script>document.getElementById('xyz').style.visibility='hidden';  </script>  "; 
              echo" <script>document.getElementById('tableholder').style.visibility='visible';  </script>  "; }
    }}}
       ?>
</html>
