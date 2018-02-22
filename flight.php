<?php

//Get flight Id variable from URL
$flightId = $_GET['id'];

//Prepare SQL query
$sql1 = "SELECT flight_date, aid_start FROM flights WHERE flight_id = $flightId";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();

$flightDate = $row['flight_date'];
$aidStart = $row['aid_start'];
$result->close();

$sql1 = "SELECT name, lat, lon FROM airports WHERE code = '$aidStart'";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();

$aidStartName = $row['name'];
$aidStartLat = $row['lat'];
$aidStartLon = $row['lon'];



echo $aidStart;
echo $flightDate;
echo $aidStartName;
echo '<br />';
echo $aidStartLat;


?>