<?php
session_start();
require_once "../includes/db.php";
require_once "../classes/User.php";

$user = new User($pdo);
if (!$user->isLoggedIn()) {
    header("Location: login.php");
    exit;
}

echo "Bienvenue dans l'admin !";
?>
<a href="logout.php">Se déconnecter</a>
