<?php      
   
    $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $username = $_POST['username'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            session_start();
            $_SESSION["companyid"]=$row["companyid"];
             $_SESSION["user"]=$row["username"];
            header("location: ../navbar/index.php")  ;
            
        } 
        else{
        $sql1="select * from driver where username='$username' and password='$password'";
        $result1=mysqli_query($con,$sql1);
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);  
        $count1 = mysqli_num_rows($result1);  
          
        if($count1 == 1){ 
             session_start();
            $_SESSION["companyid"]=$row1["companyid"];
             $_SESSION["user"]=$row1["username"];
             $_SESSION['id']=$row1["id"];
            header("location: ../navbar/dindex.php")  ;
        
                   }   
        else{  
            echo '<script>alert("Login Failed")</script>';
                   
                   echo("<script>location.href = 'index.php'</script>");
                   }     
        }

?>  