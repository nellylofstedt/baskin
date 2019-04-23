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
            <section class="bild">
                <img src="./images/bg_2.png" alt="">
            </section>
            <section class="meny">
                <h1>MENY</h1>
                <h2>Pizza</h2>
                <p>MARGERITA: Tomat och ost.</p><br>
                <p>CALZONE: Tomat, ost och skinka (dubbelvikt).</p><br>
                <p>VESUVIO: Tomat, ost och skinka.</p><br>
                <p>CAPRICCIOSA: Tomat, ost, skinka och champinjoner.</p><br>
                <p>CACCIATORA: Tomat, ost, och salami.</p><br>
                <p>VEGETARIANA: Tomat, ost, champinjoner, lök,
                rucola, färska tomater.</p><br>
                <p>PIZZA CON PESTO: Tomat, ost, pesto, oliver, 
                parmesan och rucola.</p><br>
                <p>VEGAN PIZZA: Tomat, veganost, rostade solrosfrön,
                champinjoner, lök, oliver, rucula.</p><br>
                <h2>Pasta</h2>
                <p>FIOCHETTI GORGONZOLA: Gorgonzolafyllda 
                pastaknyten på ruculabädd med gorgonzolasås, 
                valnötter och päron.</p><br>
                <p>LASAGNE AL FORNO: Klassisk med köttfärssås.</p><br>
                <p>PASTA SPINACHE: Kycklingbröst, lök, vitlök, soltorkade
                tomater, spenat, grädde, parmesanost, pinjenötter.</p><br>
            </section>

        </main>
    </div>
</body>

</html>