<?php include "../inc/dbinfo.inc";>
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
</head>
<body>

<div class="topnav">
  <a class="active" href="http://ec2-52-90-181-251.compute-1.amazonaws.com/index-pract.php">WashU Doing</a>
  <a href="http://ec2-52-90-181-251.compute-1.amazonaws.com/eventcreator2.php">Create an Event!</a>
</div>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//cdn.muicss.com/mui-0.9.9/css/mui.min.css" rel="stylesheet" type="text/css" />
<script src="//cdn.muicss.com/mui-0.9.9/js/mui.min.js"></script>

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

<!-- Input form -->
<div class="mui-container">
<form class="mui-form" action="" method="POST">
<legend>Event Creator</legend>

<div class="mui-textfield">
<input type="text" name="Name" maxlength="45" size="30">
<label>Name of Event</label>
</div>

<div class="mui-textfield">
<input type="text" name="Group_Post" maxlength="45" size="30">
<label>Group Posted</label>
</div>

<div class="mui-textfield">
<input type="text" name="Date" maxlength="45" size="30">
<label>Date</label>
</div>

<div class="mui-textfield">
<input type="text" name="Time" maxlength="45" size="30">
<label>Time</label>
</div>

<div class="mui-textfield">
<input type="text" name="Description" maxlength="360" size="360">
<label>Description</label>
</div>

<label>Location</label>
<select name="Location">
<option value=“Alpha Epsilon Pi”>Alpha Epsilon Pi</option>
<option value=“Alumni House”>Alumni House</option>
<option value=“Anheuser-Busch Hall”>Anheuser-Busch Hall</option>
<option value=“Athletic Complex”>Athletic Complex</option>
<option value="Bauer Hall">Bauer Hall</option>
<option value=“Beaumont House”>Beaumont House</option>
<option value=“Beta Theta Pi”>Beta Theta Pi</option>
<option value=“Bixby Hall”>Bixby Hall</option>
<option value=“Blewett Hall”>Blewett Hall</option>
<option value=“Bowles Plaza”>Bowless Plaza</option>
<option value=“Brauer Hall”>Brauer Hall</option>
<option value=“Brookings Hall”>Brookings Hall</option>
<option value=“Brown Hall”>Brown Hall</option>
<option value=“Bryan Hall”>Bryan Hall</option>
<option value=“Busch Hall”>Busch Hall</option>
<option value=“Campus Y”>Campus Y</option>
<option value=“Career Center”>Career Center</option>
<option value=“Catholic Student Center”>Catholic Student Center</option>
<option value=“Chabad House”>Chabad House</option>
<option value=“College Hall”>College Hall</option>
<option value=“Compton Hall”>Compton Hall</option>
<option value=“Congress of the South 40">Congress of the South 40</option>
<option value=“Cornerstone”>Cornerstone</option>
<option value=“Crow Hall”>Crow Hall</option>
<option value=“Cupples I Hall”>Cupples I Hall</option>
<option value=“Cupples II Hall”>Cupples II Hall</option>
<option value=“Danforth House”>Danforth House</option>
<option value=“Danforth University Center (DUC)”>Danforth University Center (DUC)</option>
<option value=“Dardick House”>Dardick House</option>
<option value=“Dauten House”>Dauten House</option>
<option value=“Duncker Hall”>Duncker Hall</option>
<option value=“Eads Hall”>Eads Hall</option>
<option value=“Edison Theatre”>Edison Theatre</option>
<option value=“Eliot B”>Eliot B</option>
<option value=“Eliot Hall”>Eliot Hall</option>
<option value=“Eliot House”>Eliot House</option>
<option value=“Francis Field”>Francis Field</option>
<option value=“Francis Gymnasium”>Francis Gymnasium</option>
<option value=“Gaylord Music Library”>Gaylord Music Library</option>
<option value=“Givens Hall”>Givens Hall</option>
<option value=“Goldfarb Hall”>Goldfarb Hall</option>
<option value=“Graham Chapel”>Graham Chapel</option>
<option value=“Gregg House”>Gregg House</option>
<option value=“Harbison House”>Harbison House</option>
<option value=“Hillel Center”>Hillel Center</option>
<option value=“Hitzeman House”>Hitzeman House</option>
<option value=“Holmes Lounge”>Holmes Lounge</option>
<option value=“Hurd House”>Hurd House</option>
<option value=“January Hall”>January Hall</option>
<option value=“Jolley Hall”>Jolley Hall</option>
<option value=“Kappa Sigma”>Kappa Sigma</option>
<option value=“Mildred Lane Kemper Art Museum”>Mildred Lane Kemper Art Museum</option>
<option value=“Koenig House”>Koenig House</option>
<option value=“Lab Sciences”>Lab Sciences</option>
<option value=“Lee House”>Lee House</option>
<option value=“Lien House”>Lien House</option>
<option value=“Liggett House”>Liggett House</option>
<option value=“Lopata Hall”>Lopata Hall</option>
<option value=“Lopata House”>Lopata House</option>
<option value=“Louderman Hall”>Louderman Hall</option>
<option value=“Mallinckrodt Student Center”>Mallinckrodt Student Center</option>
<option value=“McCarthy House”>McCarthy House</option>
<option value=“McDonnell Hall”>McDonnell Hall</option>
<option value=“McMillan Hall”>McMillan Hall</option>
<option value=“McMillan Laboratory”>McMillan Laboratory</option>
<option value=“Millbrook Parking Facility”>Millbrook Parking Facility</option>
<option value=“Millbrook Building”>Millbrook Building</option>
<option value=“Millbrook Square Apartments”>Millbrook Square Apartments</option>
<option value=“Monsanto Laboratory”>Monsanto Laboratory</option>
<option value=“Mudd House”>Mudd House</option>
<option value=“Myers House”>Myers House</option>
<option value=“Nemerov House”>Nemerov House</option>
<option value=“Olin Library”>Olin Library</option>
<option value=“Park House”>Park House</option>
<option value=“Phi Delta Theta”>Phi Delta Theta</option>
<option value=“Psychology Building”>Psychology Building</option>
<option value=“Radiochemistry Building”>Radiochemistry Building</option>
<option value=“Rebstock Hall”>Rebstock Hall</option>
<option value=“Ridgley Hall”>Ridgley Hall</option>
<option value=“Rubelmann House”>Rubelmann House</option>
<option value=“Rutledge House”>Rutledge House</option>
<option value=“Seigle Hall”>Seigle Hall</option>
<option value=“Sever Hall”>Sever Hall</option>
<option value=“Shanedling House”>Shanedling House</option>
<option value=“Shepley House”>Shepley House</option>
<option value=“Sigma Alpha Epsilon”>Sigma Alpha Epsilon</option>
<option value=“Sigma Chi”>Sigma Chi</option>
<option value=“Sigma Nu”>Sigma Nu</option>
<option value=“Sigma Phi Epsilon”>Sigma Phi Epsilon</option>
<option value=“Simon Hall”>Simon Hall</option>
<option value=“Snow Way Parking Facility”>Snow Way Parking Facility</option>
<option value=“South Forty House”>South Forty House</option>
<option value=“Steinberg Hall”>Steinberg Hall</option>
<option value=“Stix International House”>Stix International House</option>
<option value=“Student Health Services”>Student Health Services</option>
<option value=“Tau Kappa Epsilon”>Tau Kappa Epsilon</option>
<option value=“Theta Xi”>Theta Xi</option>
<option value=“Tietjens Hall”>Tietjens Hall</option>
<option value=“Umrath Hall”>Umrath Hall</option>
<option value=“Umrath House”>Umrath House</option>
<option value=“Urbauer Hall”>Urbauer Hall</option>
<option value=“Ursas”>Ursas</option>
<option value=“Village”>Village</option>
<option value=“Village East”>Village East</option>
<option value=“Village House”>Village House</option>
<option value=“Walker Hall”>Walker Hall</option>
<option value=“Weston Career Center”>Weston Career Center</option>
<option value=“Wheeler House”>Wheeler House</option>
<option value=“Whispers Cafe”>Whispers Cafe</option>
<option value=“Whitaker Hall”>Whitaker Hall</option>
<option value=“Whittemore House”>Whittemore House</option>
<option value=“Wilson Hall”>Wilson Hall</option>
<option value=“Wohl Parking Facility”>Wohl Parking Facility</option>
<option value=“Women’s Building”>Women's Building</option>
</select>

<label>Tags</label>
<select name="Tag_1">
<option value="Academic">Academic</option>
<option value="Arts">Arts</option>
<option value="Athletics">Athletics</option>
<option value="Diversity">Diversity</option>
<option value="Entertainment">Entertainment</option>
<option value="Free Food">Free Food</option>
<option value="Fundraising">Fundraising</option>
<option value="GBM">GBM</option>
<option value="Greek Life">Greek Life</option>
<option value="Political">Political</option>
<option value="Religious">Religious</option>
<option value="Service">Service</option>
<option value="Social">Social</option>
</select>

<select name="Tag_2">
<option value="Academic">Academic</option>
<option value="Arts">Arts</option>
<option value="Athletics">Athletics</option>
<option value="Diversity">Diversity</option>
<option value="Entertainment">Entertainment</option>
<option value="Free Food">Free Food</option>
<option value="Fundraising">Fundraising</option>
<option value="GBM">GBM</option>
<option value="Greek Life">Greek Life</option>
<option value="Political">Political</option>
<option value="Religious">Religious</option>
<option value="Service"Service</option>
<option value="Social">Social</option>
</select>

<select name="Tag_3">
<option value="Academic">Academic</option>
<option value="Arts">Arts</option>
<option value="Athletics">Athletics</option>
<option value="Diversity">Diversity</option>
<option value="Entertainment">Entertainment</option>
<option value="Free Food">Free Food</option>
<option value="Fundraising">Fundraising</option>
<option value="GBM">GBM</option>
<option value="Greek Life">Greek Life</option>
<option value="Political">Political</option>
<option value="Religious">Religious</option>
<option value="Service">Service</option>
<option value="Social">Social</option>
</select>

<br>
<button type="submit" class="mui-btn mui-btn--raised">Submit</button>

</form>
<style>.embed-container {position: relative; padding-bottom: 80%; height: 0; max-width: 100%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="WashU Doing" src="//wustlwalks.maps.arcgis.com/apps/Embed/index.html?webmap=1b8ca5df74384fed9434734e48c1ee06&amp;extent=-90.3203,38.6418,-90.295,38.6515&amp;zoom=true&amp;scale=true&amp;search=true&amp;searchextent=true&amp;details=true&amp;legendlayers=true&amp;active_panel=details&amp;basemap_gallery=true&amp;disable_scroll=true&amp;theme=light"></iframe></div>

<!-- Display table data. -->
<style> table {font-family: arial, sans-serif; border-collapse: collapse; width=100%;} td, th {border: 1px solid #dddddd; text-align: left; padding: 8px;}</style>
<table border="1" cellpadding="2" cellspacing="2">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Group Posted</td>
		<td>Date</td>
		<td>Time</td>
		<td>Description</td>
		<td>Location</td>
		<td>Tag 1</td>
		<td>Tag 2</td>
		<td>Tag 3</td>
	</tr>

<?php 
$result = mysqli_query($connection, 'Select * FROM EventInfo');
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
</html>
