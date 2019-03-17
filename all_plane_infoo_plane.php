

<html>
<head>
<title> Details Info Of Our Plane </title>
<style type= "text/css">

table {

      border: 10px solid blue;
      background-color: #44C10E;
     }



th {


     border-bottom: 10px solid #6328C3;
}

td {

    background-color: green;
    color:white;

    border-bottom: 2px solid #666;
}

</style>
</head>
<body>
    
<br>
<br>
<br>










<?php



$servername="localhost";
$username="root";
$pass="";
$db_name="bd_airline1";

$conn=mysqli_connect($servername,$username,$pass,$db_name);


$sqlget= " select * from plane";                // ai khan theke queery start 
$sqldata= mysqli_query($conn,$sqlget);



echo "<table>";

echo "<tr>
         <th>Serial no: </th>
          <th>Plane Name: </th>
           <th>Passenger Quantity: </th>  
            <th>Weight Capacity: </th>
             <th>Source: </th>
              <th>Destination: </th>
                <th> Departure Time: </th>
                <th>Plane Start Date: </th>
                  <th>Plane Status: </th>
                    <th>Seat Cost: </th>
                      <th>Pilot ID: </th>
               
     </tr>";
   

   while ($row= mysqli_fetch_array($sqldata, MYSQLI_ASSOC )) {     //aita ami akta boi a dekhlam onno vabe kora ... aktu sohoj.. aboita taro shoj ai kjaer daitto mone koro ami nilam ..bapar na .... show to ai vabe korlei hocche ...hm but amio to shikhtesi.. hmm ami tomare pore details bolbo nie .. at fiosrt ami mysql_connect( )  parametar niya korcilam but jeta te jhamela hoccilo..trai mysqli ai method dia korrci..cause a
        
           echo "<tr> <td>";
           
           echo $row ['serial_no'];
           echo "</td><td>";
           echo $row ['plane_name'];
           echo "</td><td>";
           echo $row ['quantity'];
           echo "</td><td>";
           echo $row ['weight_capacity'];
           echo "</td><td>";
           echo $row ['source'];
           echo "</td><td>";

           echo $row ['dest'];
           echo "</td><td>";

           echo $row ['dep_time'];
           echo "</td><td>";

           echo $row ['start_date'];
           echo "</td><td>";

            echo $row ['plane_status'];
           echo "</td><td>";

            echo $row ['seat_cost'];
           echo "</td><td>";


           echo $row ['pilot_id'];
            echo "</td></tr>";
            
            }
  echo "</table>";


?>


</body>
</html>


