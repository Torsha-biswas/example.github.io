<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =  "order_details";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "connection is successful";
}
else
{
	echo "connection is failed";
}
?>

