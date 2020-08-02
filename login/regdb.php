<?php      
   
   $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $org = $_POST['org'];  
    //echo $org;
    $incharge = $_POST['incharge'];  
    //echo $incharge;
    $phone = $_POST['phone'];  
    //echo $phone;
    $email = $_POST['email']; 
    //echo $email;
    $idtype = $_POST['idtype'];  
    //echo $idtype;
    $idno = $_POST['idno'];  
    //echo $idno;
    $idproof = $_POST['idproof'];  
    //echo $idproof;
    $address = $_POST['address'];  
    //echo $address;
      
        //to prevent from mysqli injection  
       /* $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password); */ 
      
       $sql = "insert into `company` (companyname,spoc,idtype,idno,idproof,phone,email,address)values('$org','$incharge','$idtype','$idno','$idproof','$phone','$email','$address')";  
        $result = mysqli_query($con, $sql);  
       // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       // $count = mysqli_num_rows($result);  
          
     if($result){ 
         
                   echo '<script>alert("Registration success!\nUsername & Password sent through registered email")</script>';
                   
                   echo("<script>location.href = 'register.php'</script>");
            
        }  
        else
          echo '<script>alert("Registration Failed \n Please try again...")</script>';
                   
                   echo("<script>location.href = 'register.php'</script>");
        
        /*   else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     */
?>  