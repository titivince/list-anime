<?php
require('src/function.php');
require('src/pdo.php');

$pdo = (new Connection())->pdo();

$sql = $pdo->query("SELECT * FROM list ORDER BY id ");

$animes = $sql->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>Tout les animes</title>
</head>
<body>
    <?php require('src/nav.html'); ?>
    <h1 class="center">Tout les animés</h1>
    <?php require('src/main-block.php'); ?>
</body>
</html>