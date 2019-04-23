<?php
/*
* PHP version 7
* @category   Slutprojekt
* @author     Nelly Löfstedt <lofstedtnelly@gmail.com>
* @license    PHP CC
*/
include_once "config-db.inc.php";

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
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="kontainer">
        <header>
            <a class="button" href="index.php"><h1>Baskin</h1></a>
            <nav>
                <?php
                if (!$_SESSION['login']) {
                    echo "<a class=\"button\" href=\"login.php\">Logga in</a>";
                } else {
                    echo "<a class=\"button\" href=\"logut.php\">Logga ut</a>";
                }
                ?>
                <a class="button" href="registrera.php">Registrera</a>
            </nav>
        </header>
        <main>
            <section class="karta">  
                <form action="">
                    <input type="radio" name="food" value="pizza"> Pizza
                    <input type="radio" name="food" value="sushi"> Sushi
                    <input type="radio" name="food" value="pasta"> Pasta
                    <input type="radio" name="food" value="husmanskost"> Husmanskost
                    <input name="search" type="text" placeholder="Search...">
                </form>
                <img src="./images/921b757aca6652942ef75591c8170f0e.png" alt="">
            </section>
            <section class="info">  
                <h2>Mamma Mia</h2>
                <p>Mamma mia är en äkta italiensk ristorante med rötter från Trieste. Hos oss får du det italienska köket när det är som bäst och i en familjär och trivsam miljö.</p>
                <a href="meny.php">Meny</a>
                <img src="./images/NoPath.png">
                <img src="./images/NoPath-1.png">
                <img src="./images/NoPath-2.png">
                <img src="./images/NoPath-3.png">
                <img src="./images/NoPath-4.png">
            </section>

        </main>
    </div>
</body>
</html>