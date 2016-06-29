<?php
 
require 'connection.php';
$conn = Connect();
$firstName = $conn->real_escape_string($_POST['firstName']);
$lastName = $conn->real_escape_string($_POST['lastName']);
$phone = $conn->real_escape_string($_POST['phone']);
$email = $conn->real_escape_string($_POST['email']);
$notes = $conn->real_escape_string($_POST['notes']);
$query = "INSERT INTO people (firstName,lastName,phone,email,notes) VALUES('" . $firstName . "','" . $lastName . "','" . $phone . "','" . $email . "','" . $notes . "')";
$success = $conn->query($query); 

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>