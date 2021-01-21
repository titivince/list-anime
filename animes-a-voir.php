<?php
require('src/pdo.php');

$pdo = (new Connection())->pdo();
$sql = $pdo->query("SELECT * FROM new");

$animes = $sql->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>A voir</title>
</head>
<body>
    <?php require('src/nav.html'); ?>
    <h1 class="center">Animes a voir</h1>
    <?php 
    if(!empty($animes)){
        require('src/a-voir-block.php');
    }else{
        echo '<h3 class="center">Il y a aucun animes a voir</h3>';
    }
     ?>
     <footer>
        <a href="cree-anime.php">Ajouté un anime</a>
     </footer>
</body>
</html>