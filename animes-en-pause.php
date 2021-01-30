<?php
require('src/pdo.php');

$pdo = (new Connection())->pdo();

if(isset($_GET['id'])) {
    $sql = $pdo->query("SELECT * FROM new WHERE id = {$_GET['id']}");

    $send = $sql->fetch();

    $sql = $pdo->query("INSERT INTO later VALUES (`$send['name']`, `$send['ep']`)");
} else {
    $sql = $pdo->query("SELECT * FROM later");

    $animes = $sql->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>En pause</title>
</head>
<body>
    <?php require('src/nav.html'); ?>
    <h2>Animes en pause</h2>
    <?php if(!empty($animes)){
        require('src/pause-block.php');
    } elseif(isset($send)) {
        echo '<h3 class="center">Animé bien mis en pause</h3>';
    }else{
        echo '<h3 class="center">Il y a aucun animes en pause</h3>';
    } ?>
</body>
</html>