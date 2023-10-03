<?php
require 'config.php';

if (isset($_POST['submit'])) {

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $aantal = $_POST['aantal'];
    $game = $_POST['game'];

    $query = "INSERT INTO bestellingen (naam, email, aantal, game) VALUES ('$naam', '$email', '$aantal', '$game')";

    $result = mysqli_query($mysqli, $query);

    if ($result) {
        echo "het item is toegevoegd<br/>";
        echo "<script>function main() {location.href = 'bestellingen_overzicht.php';} setTimeout(main, 1000);</script>";
    } else {
        echo "FOUT bij toevoegen<br/>";
        echo mysqli_error($mysqli);
    }
}
