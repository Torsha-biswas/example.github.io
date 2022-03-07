<?php
include("connection2.php");
error_reporting(0);
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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
  float: right;
}

input[type=submit]:hover {
  background-color: red;
}

.container {
  border-radius: 5px;
  background-color: aqua;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-10 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.col-5 {
  float: left;
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

<h2>Write your feedback</h2>
<h2 >(your feedback really matters)</h2>

<div class="container">
  <form action="#">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="food">Food you like here</label>
      </div>
      <div class="col-75">
        <select id="food" name="food">
          <option value="Paneer tikka">Paneer tikka</option>
          <option value="Deserts">Deserts</option>
          <option value="dosa">dosa</option>
          <option value="Veg roll">Veg roll</option>
          <option value="others">others</option>
        </select>
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="lname">If others please specify</label>
        </div>
        <div class="col-75">
          <input type="text" id="others" name="others" placeholder="food you like..">
        </div>
      </div>
    <div class="row">
        <div class="col-10">
          <label for="rating">Rate it out of 5</label>
        </div>
        <div class="col-5">
            <input type="text" id="rating" name="rate">
          </div>
        </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Your feedback</label>
      </div>
      <div class="col-75">
        <textarea id="your feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" id="button" name="submit">
    </div>
  </form>
</div>

</body>
</html>
<?php
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$food=$_GET['food'];
$others=$_GET['others'];
$rate=$_GET['rate'];
$feedback=$_GET['feedback'];

$query="INSERT INTO feedback VALUES ('$fn', '$ln', '$food', '$others', '$rate', '$feedback')";
$data2=mysqli_query($conn2, $query);
if($data2)
{
	//echo "data inserted into db";
}
else
{
	echo "failed";
}
?>
