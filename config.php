<?php
$db_host = "localhost:3306";
$db_username = "charaf_admin";
$db_password = "1235vz1235";
$db_database = "87797_verzameling";

// Create connection

$mysqli = mysqli_connect($db_host, $db_username, $db_password, $db_database);

// Check connection
if (!$mysqli) {
  echo "<script> console.log('FOUT: geen connectie naar database.')</script>";
  echo "<script> console.log('ERROR: " . mysqli_connect_error() . "')</script>";
  exit;
} else {
  echo "<script> console.log('Verbinding met " . $db_database . " is gemaakt!')</script>";
}
