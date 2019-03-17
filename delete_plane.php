

<?php

   $con_db = mysqli_connect("localhost","root","","bd_airline1");

 

?>



<html>

<header>

<title> delete a plane</title>

<link rel="stylesheet" type="text/css" href="delete.css">
</header>




<style type= "text/css">




.type {


     border-bottom: 10px solid green;
}

*input.value {

    background-color: red;
    color:white;

    border-bottom: 2px solid #666;
}

</style>




















<body>
	

<form action="" method="post">

Eneter serial num: <input type="text" name="serial_no" placeholder="input serial no">

<input type="submit" value="Delete">
	


</form>



</body>



</html>





<?php


@$var= $_POST['serial_no'];




$sql=" delete from plane where serial_no=$var";

mysqli_query($con_db,$sql);


?>


<br>

<?php include("all_plane_infoo_plane.php"); ?>








