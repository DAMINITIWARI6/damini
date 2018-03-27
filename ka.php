<?php
 include "connection.php";

 $id_reg = $_SESSION['loggedIn_cust_id'];

$name=mysqli_real_escape_string($con, $_POST['name']);
$days=mysqli_real_escape_string($con, $_POST['days']);
$nights=mysqli_real_escape_string($con, $_POST['nights']);
$stay=mysqli_real_escape_string($con, $_POST['stay']);
$food=mysqli_real_escape_string($con, $_POST['food']);
$travel=mysqli_real_escape_string($con, $_POST['travel']);
$doj=mysqli_real_escape_string($con, $_POST['doj']);
$total=mysqli_real_escape_string($con, $_POST['total']);
$sql="INSERT INTO placedetails(ID_regist,name,days,nights,stay,food,travel,doj,total) VALUES('$id_reg','$name','$days','$nights','$stay','$food','$travel','$doj','$total')";


if($con->query($sql) === TRUE)
{
			echo "success";
			header('location:kashmirpayment.php');
}
else
	echo "Error: " . $sql . "<br>" . $con->error;
?>


<!--noofdays,noofnights,stayamount,foodamount,airlinesamount,-->
<!--,'$noofdays','$noofnights','$stayamount','$foodamount','$airlinesamount'-->