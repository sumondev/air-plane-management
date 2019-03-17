

<html>
<head>
<title> Display data in db </title>
<style type= "text/css">

table {

	  border: 10px solid blue;
	  background-color: #44C10E;
     }



th {


	 border-bottom: 10px solid #6328C3;
}

td {

	background-color:#117A65 ;

	border-bottom: 2px solid #666;
}

</style>
</head>
<body>
	<h1> Display data from DB</h1>











<?php

echo "welcome to registration  form";

$servername="localhost";
$username="root";
$pass="";
$db_name="bd_airline1";

$conn=mysqli_connect($servername,$username,$pass,$db_name);


$sqlget= " select * from reg";                // ai khan theke queery start 
$sqldata= mysqli_query($conn,$sqlget);



echo "<table>";

echo "<tr>
         <th>User name: </th>
          <th>Fisrt name: </th>
           <th>last name: </th>  
            <th>mobile no: </th>
             <th>city: </th>
              <th>home address: </th>
                <th> permanent address: </th>
                <th>password: </th>
                  <th>Gender: </th>
               
     </tr>";
   

   while ($row= mysqli_fetch_array($sqldata, MYSQLI_ASSOC )) {     //aita ami akta boi a dekhlam onno vabe kora ... aktu sohoj.. aboita taro shoj ai kjaer daitto mone koro ami nilam ..bapar na .... show to ai vabe korlei hocche ...hm but amio to shikhtesi.. hmm ami tomare pore details bolbo nie .. at fiosrt ami mysql_connect( )  parametar niya korcilam but jeta te jhamela hoccilo..trai mysqli ai method dia korrci..cause a
     	
           echo "<tr> <td>";
           
           echo $row ['user_name'];
           echo "</td><td>";
           echo $row ['fst_name'];
           echo "</td><td>";
           echo $row ['lst_name'];
           echo "</td><td>";
           echo $row ['mbl_num'];
           echo "</td><td>";
           echo $row ['city'];
           echo "</td><td>";

           echo $row ['h_num'];
           echo "</td><td>";

           echo $row ['p_ads'];
           echo "</td><td>";

           echo $row ['pass'];
           echo "</td><td>";


           echo $row ['gender'];
            echo "</td></tr>";
            
            }
  echo "</table>";


?>


</body>
</html>
