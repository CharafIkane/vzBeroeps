<?php

require 'config.php';
// tabel naam
$query = "SELECT * FROM games";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
        while ($item = mysqli_fetch_assoc($result)) {
                echo "<div class='game'>Game = " . $item['gameName']   . "</br>";
                echo "Prijs = $" . $item['price']   . "</br>";
                echo "Uitgave = " . $item['releaseYear']   . "</br>";
                echo "Genre = " . $item['genre']   . "</br>";
                echo "Console = " . $item['console']   . "</br>";
                echo "</div>";
        }
} else {
        echo "0 results";
}
