<?php
session_start();
$_SESSION['login'] = false;
$_SESSION['epost'] = null;
header("Location:index.php");
?>