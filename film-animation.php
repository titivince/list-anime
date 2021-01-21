<?php
require('src/function.php');
require('src/pdo.php');

$pdo = (new Connection())->pdo();
$sql = $pdo->query("SELECT * FROM film");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>Film</title>
</head>
<body>
   <?php require('src/nav.html'); ?>
   <h1 class="center">Film d'animation</h1>
</body>
</html>