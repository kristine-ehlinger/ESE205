<?php include "../inc/dbinfo.inc";?>
<html>
<head>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>

<div class="topnav">
  <a class="active" href="http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php">WashU Doing</a>
  <a href="http://ec2-52-90-181-251.compute-1.amazonaws.com/eventcreator.php">Create an Event!</a>
</div>
 
<div class="topnav">
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target1">Academic</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target2">Arts</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target3">Athletics</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target4">Diversity</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target5">Entertainment</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target6">Free Food</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target7">Fundraising</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target8">GBM</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target9">Greek Life</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target10">Political</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target11">Religious</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target12">Service</a>
<a href= "http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php#target13">Social</a>

</div>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//cdn.muicss.com/mui-0.9.9/css/mui.min.css" rel="stylesheet" type="text/css" />
<script src="//cdn.muicss.com/mui-0.9.9/js/mui.min.js"></script>

</head>
<body>
<?php

/* Connect to MySQL and select the database. */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

$database = mysqli_select_db($connection, DB_DATABASE);

/* Ensure that the EventInfo table exists. */
VerifyEventInfoTable($connection, DB_DATABASE);

$name = htmlentities($_POST['Name']);
$group_post = htmlentities($_POST['Group_Post']);
$date = htmlentities($_POST['Date']);
$time = htmlentities($_POST['Time']);
$description = htmlentities($_POST['Description']);
$location = htmlentities($_POST['Location']);
$tag_1 = htmlentities($_POST['Tag_1']);
$tag_2 = htmlentities($_POST['Tag_2']);
$tag_3 = htmlentities($_POST['Tag_3']);

if (strlen($name) || strlen($group_post) || strlen($date) || strlen($time) || strlen($description) || strlen($location) || strlen($tag_1) || strlen($tag_2) || strlen($tag_3)) {
AddEventInfo($connection, $name, $group_post, $date, $time, $description, $location, $tag_1, $tag_2, $tag_3);
}
?>

<body>
<div class="mui-container">
<style>
<table width="100%">
<tr class="mui--appbar-height">
<td align="center">
</td>
</tr>
</table>
</style>
</div>

<a name="target1"></a>
<br>
<h1>Academic</h1>
<p>

<!-- Display table data. -->

<style>
table {width:100%}
table,th,td {border: 1px solid black; border-collapse: collapse;}
th, td{ padding: 5px; text-align: left;}
</style>

<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Academic" or Tag_2="Academic" or Tag_3="Academic"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table> 
</p>

<a name="target2"></a>
<br>
<h1>Arts</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Arts" or Tag_2="Arts" or Tag_3="Arts"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table> 
</p>

<a name="target3"></a>
<br>
<h1>Athletics</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Athletics" or Tag_2="Athletics" or Tag_3="Athletics"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table>
</p>

<a name="target4"></a>
<br>
<h1>Diversity</h1>
<p>  
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Diversity" or Tag_2="Diversity" or Tag_3="Diversity"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table> 
</p>

<a name="target5"></a>
<h1>Entertainment</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Entertainment" or Tag_2="Entertainment" or Tag_3="Entertainment"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table>
</p>

<a name="target6"></a>
<br>
<h1>Free Food</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Free Food" or Tag_2="Free Food" or Tag_3="Free Food"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table> 
</p>

<a name="target7"></a>
<h1>Fundraising</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Fundraising" or Tag_2="Fundraising" or Tag_3="Fundraising"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table>
</p>

<a name="target8"></a>
<br>
<h1>GBM</h1>
<p>
 <table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="GBM" or Tag_2="GBM" or Tag_3="GBM"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table>
</p>

<a name="target9"></a>
<br>
<h1>Greek Life</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Greek Life" or Tag_2="Greek Life" or Tag_3="Greek Life"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table>
</p>

<a name="target10"></a>
<br>
<h1>Political</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Political" or Tag_2="Political" or Tag_3="Political"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table> 
</p>

<a name="target11"></a>
<br>
<h1>Religious</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Religious" or Tag_2="Religious" or Tag_3="Religious"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table>
</p>

<a name="target12"></a>
<br>
<h1>Service</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Service" or Tag_2="Service" or Tag_3="Service"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table> 
</p>

<a name="target13"></a>
<br>
<h1>Social</h1>
<p>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Group Posted</th>
		<th>Date</th>
		<th>Time</th>
		<th>Location</th>
		<th>Tag 1</th>
		<th>Tag 2</th>
		<th>Tag 3</th>
		<th>Description</th>
	</tr>

<?php 

$result = mysqli_query($connection, 'Select * FROM EventInfo where Tag_1="Social" or Tag_2="Social" or Tag_3="Social"
');
while($query_data = mysqli_fetch_row($result)) {
echo "<tr>";
echo "<td>",$query_data[0], "</td>",
	 "<td>",$query_data[1], "</td>",
	 "<td>",$query_data[2], "</td>",
	 "<td>",$query_data[3], "</td>",
	 "<td>",$query_data[4], "</td>",
	 "<td>",$query_data[5], "</td>",
	 "<td>",$query_data[6], "</td>",
	 "<td>",$query_data[7], "</td>",
	 "<td>",$query_data[8], "</td>",
	 "<td>",$query_data[9], "</td>";
echo "</tr>";
}
?>
</table>
</p>

<?php
mysqli_free_result($result);

function AddEventInfo($connection, $name, $group_post, $date, $time, $description, $location, $tag_1, $tag_2, $tag_3) {
	$n = mysqli_real_escape_string($connection, $name);
	$g = mysqli_real_escape_string($connection, $group_post);
	$d = mysqli_real_escape_string($connection, $date);
	$t = mysqli_real_escape_string($connection, $time);
	$de = mysqli_real_escape_string($connection, $description);
	$l = mysqli_real_escape_string($connection, $location);
	$t1 = mysqli_real_escape_string($connection, $tag_1);
	$t2 = mysqli_real_escape_string($connection, $tag_2);
	$t3 = mysqli_real_escape_string($connection, $tag_3);

//	$query = "INSERT INTO 'EventInfo' ('Name', 'Group_Post', 'Date', 'Time', 'Description', 'Location', 'Tag_1', 'Tag_2', 'Tag_3') VALUES ('$n', '$g', '$d', '$t', '$de', '$l', '$t1', '$t2', '$t3');"; 
	$query = 'INSERT INTO EventInfo (Name, Group_Post, Date, Time, Description, Location, Tag_1, Tag_2, Tag_3) VALUES (' . '\'' . $n . '\',\'' . $g . '\',\'' . $d . '\',\'' . $t . '\',\'' . $de . '\',\'' . $l . '\',\'' . $t1 . '\',\'' . $t2 . '\',\'' . $t3 . '\')';
/* Echo $query; */
	if(!mysqli_query($connection, $query)) echo('<p>Error adding event data.</p>' . $connection->errno . ' - ' . $connection->error);
}

function VerifyEventInfoTable($connection, $dbName) {
	if(!TableExists("EventInfo", $connection, $dbName))
	{
$query = 'CREATE TABLE EventInfo (
ID int(11) NOT NULL AUTO_INCREMENT,
Name varchar(50),
Group_Post varchar(50),
Date varchar(30),
Time varchar(30),
Description varchar(50),
Location varchar(50),
Tag_1 varchar(50),
Tag_2 varchar(50),
Tag_3 varchar(50),
PRIMARY KEY (ID),
UNIQUE KEY ID_UNIQUE (ID))
ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1';

echo $query;

	if(!mysqli_query($connection, $query)) echo('<p>Error creating table.</p>' . $connection->errno . ' - ' . $connection->error);
}
}

function TableExists($tableName, $connection, $dbName) {
		$t = mysqli_real_escape_string($connection, $tableName);
		$d = mysqli_real_escape_string($connection, $dbName);
		
		$checktable = mysqli_query($connection, 
"SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_NAME = '$t' AND TABLE_SCHEMA = '$d'");

	if(mysqli_num_rows($checktable) > 0) return true;
	
	return false;
}

mysqli_close($connection);
?>
<br>
<style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="WashU Doing" src="//wustlwalks.maps.arcgis.com/apps/Embed/index.html?webmap=1b8ca5df74384fed9434734e48c1ee06&amp;extent=-90.3203,38.6418,-90.295,38.6515&amp;zoom=true&amp;scale=true&amp;search=true&amp;searchextent=true&amp;details=true&amp;legendlayers=true&amp;active_panel=details&amp;basemap_gallery=true&amp;disable_scroll=true&amp;theme=light"></iframe>

</html>
