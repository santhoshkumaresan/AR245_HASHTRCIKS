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
$sql = "SELECT count(*) as count FROM alerts";
$qry = mysqli_query($con,$sql);
$rowq = mysqli_fetch_assoc($qry);
echo $rowq['count'];
?>