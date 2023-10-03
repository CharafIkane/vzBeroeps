<?php
require 'config.php';

$query = "SELECT * FROM bestellingen";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
    while ($item = mysqli_fetch_assoc($result)) {
        echo "<div class='bestelling'> <p><strong>" . $item['naam']   . "</strong></p></br>";
        echo "<p>Game = " . $item['game']   . "</p>";
        echo "<p>Aantal = " . $item['aantal']   . "</p>";
        echo "<p>E-mail = " . $item['email']   . "</p>";
        echo "</div>";
    }
} else {
    echo "<div class='resultaat'>0 results</div>";
}
