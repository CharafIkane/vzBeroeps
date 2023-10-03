<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collectie - GamuxD</title>
    <script src="js/collectie.js" defer></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/bottom.css" />
    <link rel="stylesheet" href="css/bestellingen.css" />
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
        <div id="besteloverzicht">
            <a href="collectie.php">
                <div id="toevoegen">Naar de collectie</div>
            </a>
            <?php
            include 'bestellingen.php';

            ?>
        </div>

        <div class="nav-links">
            <a href="hoofdpagina.html">Home</a>
            <a href="#">Collectie</a>
            <a href="bestellen.php">Bestellen</a>
        </div>
    </div>
    <div></div>
    <!-- bottom -->
    <div class="footer">
        Coded by
        <a target="_blank" href="mailto:087797@glr.nl">Charaf Ikane</a>
        <span> | </span>
        <a target="_blank" href="https://www.instagram.com/cib.webdev/">@cibwebdev</a>
    </div>
</body>

</html>