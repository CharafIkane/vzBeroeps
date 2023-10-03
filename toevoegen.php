<?php
require 'config.php';


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO games (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
