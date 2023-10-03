<?php
require 'config.php';




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
if (isset($_POST['submit'])) {
    $genre = $_POST['genre'];
    $gameName = $_POST['gameName'];
    $price = $_POST['price'];
    $releaseYear = $_POST['releaseYear'];
    $console = $_POST['console'];
}

$sql = "INSERT INTO games (genre, gameName, price, releaseYear, console) VALUES ('$genre', '$gameName', '$price', '$releaseYear', '$console')";
