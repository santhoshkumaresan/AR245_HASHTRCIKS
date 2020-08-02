<?php session_start();
  $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    
        $query = "SELECT * FROM `track` where companyid={$_SESSION['companyid']} and truckid={$_SESSION['tid']} ";
       $result=mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
$data=array($row['latitude'],$row['logitude']);       
echo $data;
    $result->free();
} 
        
             
?>
 