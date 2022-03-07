<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "order_details";
$conn3 = mysqli_connect($servername,$username,$password,$dbname);

if($conn3)
{
	//echo "connection is successful";
}
else
{
	echo "connection is failed";
}
?>

