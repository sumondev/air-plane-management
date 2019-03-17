

<?php

   $con_db = mysqli_connect("localhost","root","","bd_airline1");

 

?>


<html>

<header>

<title> update a plane</title>

<link rel="stylesheet" type="text/css" href="update.css">
</header>

<body>


<div class="banner"> Update Plane Info </div> 

<br>
<br>
<br>
	

<form  class=" form " action="" method="post">

Enter Serial Num of Plane: <input type="text" name="serial_no" placeholder="input serial number" required>
<br>
<br>

Update Pilot_ID: <input type="text" name="pilot_id" placeholder="input update pilot id" >

<br>
<br>

Update Seat Price : <input type="text" name="price" placeholder="input update seat price">

<br>
<br>



<input type="submit" value="Update">
	


</form>


<br>


<h1 >All   b  , Plane Info From Database<h1>



</body>



</html>





<?php
@ $var1= $_POST['serial_no'];

@$var2= $_POST['pilot_id'];


@$var3= $_POST['price'];


if($var2!= null && $var3==null){
 	$sql=" update plane set pilot_id=$var2 where serial_no=$var1 ";
 	mysqli_query($con_db,$sql);

}

else if($var2== null && $var3!=null){
 	$sql=" update plane set seat_cost=$var3 where serial_no=$var1 ";
 	mysqli_query($con_db,$sql);

}

else if ($var2!= null && $var3!=null) {
	$sql=" update plane set pilot_id=$var2, seat_cost=$var3 where serial_no=$var1 ";
	mysqli_query($con_db,$sql);
}








?>

<br>

<?php include("all_plane_infoo_plane.php"); ?>


