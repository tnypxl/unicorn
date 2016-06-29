<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'connection.php';
$conn = Connect();
$query = "select * from people order by lastName asc;";
$result = $conn->query($query); 
if (!$result) {
    die("Couldn't retrieve data: ".$conn->connect_error);
}
 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        #echo "Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
        print_r($row);
        echo "Name: ".$row['firstName']." ".$row["lastName"]." Phone: Email: Notes: <br />";
    }
} else {
    echo "0 results";
}
 
$conn->close();
?>
