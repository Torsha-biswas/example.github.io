<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>Restaurant website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: horizontal;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: yellow;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: red;
}

.container {
  border-radius: 5px;
  background-color: pink;
  padding: 20px;
}

.col-25 {
  float: center;
  width: 25%;
  margin-top: 6px;
}
.col-10 {
  float: center;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: center;
  width: 75%;
  margin-top: 6px;
  text-color: blue;
}
.col-5 {
  float: center;
  width: 15%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Order your food from here</h2>


<div class="container">
 

    <form action="#" class="order">
	<div class="row">
	<div class="col-10">
            <legend>Order here</legend>

            <div class="food-menu-img">
                <img src="food32.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
            </div>

            <div class="food-menu-desc">
			<table align="center" border="0" cellspacing="15">
                
                

                <div class="order-label">Quantity</div>
                <input type="number" name="qty" class="input-responsive" value="1" required>
                <div class="order-label">Food title</div>
                <input type="text" name="title"  placeholder="E.g. chowmein" class="input-responsive" required >
                
            </div>
                
            </div>

        </fieldset>
        
        <fieldset>
            <legend>Delivery Details</legend>
            <div class="order-label">Full Name</div>
            <input type="text" name="full-name" placeholder="E.g. torsha" class="input-responsive" required>

            <div class="order-label">Phone Number</div>
            <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

            <div class="order-label">Email</div>
            <input type="email" name="email" placeholder="E.g. hi@ttt.com" class="input-responsive" required>

            <div class="order-label">Address</div>
            <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

            <input type="submit" name="submit" value="Confirm Order" id="btn">
        </fieldset>

    </form>

</div>
</table>


</body>
</html>

<?php
$qt=$_GET['qty'];
$tit=$_GET['title'];
$fname=$_GET['full-name'];
$con=$_GET['contact'];
$email=$_GET['email'];
$add=$_GET['address'];

$query="INSERT INTO customer VALUES ('$qt', '$tit', '$fname', '$con', '$email', '$add')";
$data=mysqli_query($conn, $query);
if($data)
{
	//echo "data inserted into db";
}
else
{
	echo "failed";
}
?>
