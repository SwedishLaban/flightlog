<?php

$result = $conn->query("SELECT COUNT(flight_date) AS entryCount, COUNT(DISTINCT Registration) AS numRegs FROM flights");
$row = $result->fetch_assoc();
echo $row['entryCount']." total entries in database.<br />";
echo $row['numRegs']." unique aircraft registrations.";
$result->close();
echo '<br /><br />';



$sql = "SELECT flight_id, flight_date, aid_start, aid_end, Flight_Number, Airline, Plane, Registration FROM flights";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    echo "<table border='0' cellspacing='0' cellpadding='5'>
            <tr>
                <td><b>Date:</b></td>
                <td>Flight#:</td>
                <td>From:</td>
                <td>To:</td>
                <td>Airline:</td>
                <td>Aircraft type:</td>
                <td>Registration</td>
                <td></td>
            </tr>";
            
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["flight_date"]."</td>
                <td>".$row["Flight_Number"]."</td>
                <td>".$row["aid_start"]."</td>
                <td>".$row["aid_end"]."</td>
                <td>".$row["Airline"]."</td>
                <td>".$row["Plane"]."</td>
                <td>".$row["Registration"]."</td>
                <td><a href='?page=flight&id=".$row["flight_id"]."'><img src='icons/eye.svg' /></a></td>
            </tr>";
    }
    echo "</table>";
}


?>