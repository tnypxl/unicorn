<?php
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "unicorn";
 $dbpass = "password1!";
 $dbname = "unicorn";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 return $conn;
} 
?>