<?php session_start();
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
if(!empty($_POST['lat']) && !empty($_POST['lng'])){

 $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    
$cid=$_SESSION['companyid'];
$truckno="";
$did=$_SESSION['id'];
$latitude=$_POST['lat'];
$longitude=$_POST['lng'];
$sql="select * from fleets where driverid =$did and companyid=$cid";
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count == 1){ 
    $truckno=$row['id'];
}
$sql1="update `track` set latitude={$latitude},logitude={$longitude} where truckid={$truckno} and companyid={$cid}";
$result1=mysqli_query($con, $sql1);
if ($result1) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

echo $latitude,$longitude,$truckno,$cid;
}
?>
