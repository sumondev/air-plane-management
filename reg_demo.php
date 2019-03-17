<?php

echo "welcome to registration  form";

$servername="localhost";
$username="root";
$pass="";
$db_name="bd_airline1";

$con_db=mysqli_connect($servername,$username,$pass,$db_name);


    
   @ $fst_name=$_POST['name2'];
    @$lst_name=$_POST['name3'];
   @ $mbl_num=$_POST['name4'];
   @ $city=$_POST['name5'];
   @ $h_num=$_POST['name6'];
   @ $p_ads=$_POST['name7'];

   @ $pass=$_POST['name8'];
   @ $gen=$_POST['gender'];




    $sql_database = "select user_name from reg";

     while ($row= mysqli_fetch_array($sqldata, MYSQLI_ASSOC )){


            if($user_name==$row['user_name']){

                include("register.php");
            }


     }
    
    
    
    $sql="insert into reg (user_name,fst_name,lst_name,mbl_num,city,h_num,p_ads,pass,gender)
        
        values('$user_name','$fst_name','$lst_name','$mbl_num','$city','$h_num','$p_ads','$pass','$gen')";



    
    mysqli_query($con_db,$sql);
    
   

    

     
    


?>