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
        <form action="#" id="form" method="post">
            <label for="name">Name:</label><br>
            <input type="text" name="name" required
                value="<?php echo isset($_POST['name']) ? $_POST['name'] : ' ' ?>"><br>
            <label for="epost">E-post:</label><br>
            <input type="text" name="epost" required
                value="<?php echo isset($_POST['epost']) ? $_POST['epost'] : ' ' ?>"><br>
            <label for="password">Password:</label><br>
            <input type="password" name="pw" required><br>
            <label for="password">Repeat password:</label><br>
            <input type="password" name="pwa" required><br>
            <button>Registrera</button>
        </form>
        <?php  
/* Ta emot data från formuläret och lagra i tabellen */
if (isset($_POST["name"], $_POST["epost"], $_POST["pw"], $_POST["pwa"])) {
    /* Skyddar mot farligheter */
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $epost = filter_input(INPUT_POST, "epost", FILTER_SANITIZE_STRING);
    $pw = filter_input(INPUT_POST, "pw", FILTER_SANITIZE_STRING);
    $pwa = filter_input(INPUT_POST, "pwa", FILTER_SANITIZE_STRING);
    
    /* Logga in på databasen och skapa en anslutning */
    $conn = new mysqli($hostname, $user, $password, $database); 
    
    /* Kolla att vi har en fungerande anslutning */
    if ($conn->connect_error) {
        die("Kunde inte ansluta till database: " . $conn->connect_error);
    }
    
    /* Räkna ut hashet */
    $hash = password_hash($pw, PASSWORD_DEFAULT);
    
    /* Nu lagrar vi en ny användare */
    $sql = "INSERT INTO admin (name, epost, hash) VALUES ('$name', '$epost', '$hash');";
    $result = $conn->query($sql);
    
    /* Kunde inte SQL-satsen köras? */
    if (!$result) {
        die("Något blev fel med SQL-satsen: " . $conn->error);
    } else {
        echo "<p>Användaren är nu registrerad!</p>";
    }
    
    /* Kom ihåg att stänga ned anslutningen */
    $conn->close(); 
}


?>
    </div>
</body>

</html>