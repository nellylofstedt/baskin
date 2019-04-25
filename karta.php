<?php
/*
* PHP version 7
* @category   Slutprojekt
* @author     Nelly Löfstedt <lofstedtnelly@gmail.com>
* @license    PHP CC
*/

/* Aktivera felmeddelande under utvecklingen */
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baskin</title>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <a class="button" href="index.php"><h1>Baskin</h1></a>
            <nav>
                <?php
                if (!$_SESSION['login']) {
                    echo "<a class=\"active\" href=\"karta.php\">Karta</a>";
                    echo "<a class=\"button\" href=\"login.php\">Logga in</a>";
                } else {
                    echo "<a class=\"button\" href=\"logut.php\">Logga ut</a>";
                }
                ?>
                <a class="button" href="registrera.php">Registrera</a>
            </nav>
        </header>
        <main>
            <div id="map"></div>
                <div class="box">
                <h3>Registrera platser</h3>
                <form class="platser"></form>
        <button id="knapp">Spara</button>
            </div>
        </main>
    </div>
    <script src="./js/mapbox.js"></script>
</body>
</html>
