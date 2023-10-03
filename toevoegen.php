<?php
require 'config.php';

if (isset($_POST['submit'])) {

    $genre = $_POST['genre'];
    $gameName = $_POST['gameName'];
    $price = $_POST['price'];
    $releaseYear = $_POST['releaseYear'];
    $console = $_POST['console'];

    $query = "INSERT INTO games (genre, gameName, price, releaseYear, console) VALUES ('$genre', '$gameName', '$price', '$releaseYear', '$console')";

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        echo "het item is toegevoegd<br/>";
        echo "<script>function main() {location.href = 'collectie.php';} setTimeout(main, 1000);</script>";
    } else {
        echo "FOUT bij toevoegen<br/>";
        echo mysqli_error($mysqli);
    }
}
