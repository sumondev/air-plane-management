<?php

echo "Regestation sucess";


$servername="localhost";
$username="root";
$pass="";
$db_name="bd_airline1";

$con_db=mysqli_connect($servername,$username,$pass,$db_name);


    
    $serial_no=$_POST['name1'];
    $plane_name=$_POST['name2'];
    $quantity=$_POST['name3'];
    $weight_capacity=$_POST['name4'];
    $source=$_POST['name5'];
    $dest=$_POST['name6'];
    $dep_time=$_POST['name7'];

    $start_date=$_POST['name8'];

    $plane_status=$_POST['name9'];

     $seat_cost=$_POST['name10'];

    $pilot_id=$_POST['name11'];
    
    
    
    $sql="insert into plane (serial_no,plane_name,quantity,weight_capacity,source,dest,dep_time,start_date,plane_status,seat_cost,pilot_id)
        
        values('$serial_no','$plane_name','$quantity','$weight_capacity','$source','$dest','$dep_time','$start_date','$plane_status','$seat_cost','$pilot_id')";
    
    mysqli_query($con_db,$sql);
    
   

    

     
    


?>