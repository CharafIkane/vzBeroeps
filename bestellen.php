<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bestellen - GamuxD</title>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/bottom.css" />
    <link rel="stylesheet" href="css/bestellen.css" />
    <link rel="shortcut icon" href="media/favicon.png" type="image/x-icon" />
</head>

<body>
    <div class="nav">
        <input type="checkbox" id="nav-check" />
        <div class="nav-header">
            <div class="nav-title">GamuxD</div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <div class="nav-links">
            <a href="hoofdpagina.html">Home</a>
            <a href="collectie.php">Collectie</a>
            <a href="#">Bestellen</a>
        </div>
        <h2 id="titel">Game bestellen</h2>
        <form method="post" action="toevoegenbestelling.php" id="form">
            <input type="text" name="naam" placeholder="Naam" required /> <br />
            <input type="email" name="email" placeholder="E-mail" required /> <br>
            <select name='game' id='game' required>
                <option value="null">- selecteer uw game -</option>
                <?php
                require 'config.php';

                $query = "SELECT * FROM games";

                $result = mysqli_query($mysqli, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($item = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $item['gameName'] . "'>" . $item['gameName'] . "</option>";
                    }
                } else {
                    echo "<div class='game'>0 results</div>";
                }
                ?>
            </select>
            <br />
            <input type="number" name="aantal" placeholder="Aantal" required />
            <br />
            <input type="submit" name="submit" value="Bestellen" />
        </form>
        <img src="media/cart.png" id="cart">
    </div>
    <!-- bottom -->
    <div class="footer">
        Coded by
        <a target="_blank" href="mailto:087797@glr.nl">Charaf Ikane</a>
        <span> | </span>
        <a target="_blank" href="https://www.instagram.com/cib.webdev/">@cibwebdev</a>
    </div>
</body>

</html>