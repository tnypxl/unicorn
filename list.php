<?php


require 'connection.php';
$conn = Connect();
$query = "select * from people order by lastName asc;";
$result = $conn->query($query); 
if (!$success) {
    die("Couldn't retrieve data: ".$conn->error);
}
 
#echo "This is my list<br>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        #echo "Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
        print_r($row);
    }
} else {
    echo "0 results";
}
 
$conn->close();
?>
