<?php

require 'config.php';
// tabel naam
$query = "SELECT * FROM games";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
        while ($item = mysqli_fetch_assoc($result)) {
                echo "<div class='game'> <p class='gameTitel'><strong>" . $item['gameName']   . "</strong></p></br>";
                echo "<p>Prijs = $" . $item['price']   . "</p>";
                echo "<p>Uitgave = " . $item['releaseYear']   . "</p>";
                echo "<p>Genre = " . $item['genre']   . "</p>";
                echo "<p>Console = " . $item['console']   . "</p>";
                echo "</div>";
        }
} else {
        echo "0 results";
}
