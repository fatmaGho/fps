<?php

$username="root";
$password="";
$database="xcoding";
 // Create connection
 $con = new mysqli("localhost", $username, $password, $database);
 // Check connection
 $con->select_db($database) or die( "Unable to select database");
 if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
 }
 echo "Connected successfully";
?>