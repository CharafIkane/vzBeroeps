<?php
$servername = "localhost";
$username = "charaf_admin";
$password = "1235vz1235";
$dbname = "87797_verzameling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connected successfully";
}
