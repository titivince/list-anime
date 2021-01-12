<?php
require('function.php');

$pdo = new PDO('mysql:host=mysql;dbname=anime;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = $pdo->query("SELECT * FROM list ORDER BY id DESC LIMIT 12");

$animes = $sql->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Animes</title>
</head>
<body>
    <nav>
        <a href="tout-les-anime.php">Tout les animés vu</a>
        <a href=".php">Par catégorie</a>
        <a href=".php">Animés a voir</a>
        <a href=".php">Film d'animation</a>
        <a href=".php">Animés en pause</a>
    </nav>
    <h1 class="center">Les derniers animés regardés</h1>
    <div class="main-block d-flex">
        <?php
        foreach ($animes as $anime): ?>
            <div class="block">
                <?php
                $time = round($anime['time'] * $anime['ep'] / 60, 1);
                $m = $time;
                $h = $time;
                while ($m >= 1){
                    $m = $m - 1;
                }
                if ($m !== 1){
                    $h = round( $h , 0 , PHP_ROUND_HALF_UP);
                    if($h > $time ){
                     $h = $h - 1; 
                    }
                    $m = $m * 60;
                }else{
                    $h = round( $h , 0);
                    $m = 0;
                }
                ?>
                <h2 class="center"><?= $anime['name']?></h2>
                <p class="desc">synopsys : <?= excerpt($anime['desc'])?></p>
                <a href="<?= $anime['link']?>" target="_blank">Lien vidéo</a>
                <div class="info d-flex">
                    <p>Saisons : <?= $anime['season']?></p> 
                    <p>Total d'ep : <?= $anime['ep']?></p>
                    <p>Tags : <?= $anime['tags']?></p>
                </div>
                <div class="info d-flex">
                    <p>Duré d'un épsisode : <?= $anime['time']?> m</p>
                    <p>Durée total : <?= $time . ' h ou ' . $h . ' h et ' . $m . 'm'?></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <footer>
        blabla c drole
    </footer>
</body>
</html>