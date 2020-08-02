<?php session_start();
echo '
 <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Truck ID</th>
                    <th scope="col" class="sort" data-sort="budget">Kit ID</th>
                    <th scope="col" class="sort" data-sort="status">From</th>
                    <th scope="col">To</th>
                    <th scope="col" class="sort">Track</th>
                  </tr>
                </thead>
                <tbody class="list">';
                  
 $host = "localhost";  
    $user = "id14484437_hashtrackweb";  
    $password = 'm3xM?!mP/9@Kj3j';  
    $db_name = "id14484437_hashtricksweb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    
        $query = "SELECT * FROM `track` where companyid={$_SESSION['companyid']} and status='intransit'";
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
                    
                    
                    <td>
               <button type='submit' onclick='document.location=`maps.php?tid=".$row['truckid']."`' class='ni ni-spaceship text-danger'>Track</button>
                    
                    
                    </td>
                  </tr>";
                 
    }
    $result->free();
} 
                   
             
?>
  </tbody>
                    </table>