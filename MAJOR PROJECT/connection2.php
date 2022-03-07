<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "order_details";
$conn2 = mysqli_connect($servername,$username,$password,$dbname);

if($conn2)
{
	//echo "connection is successful";
}
else
{
	echo "connection is failed";
}
?>

