<?php
$pdo = new PDO('mysql:host=mysql;dbname=anime;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = $pdo->query("SELECT * FROM list");

$animes = $sql->fetchAll();

function get_hour(){
    $time = $anime['time'] * $anime['ep'] / 60;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>
<body>
    <nav>

    </nav>
    <h1>Liste des Animes regardés</h1>

    <?php
    foreach ($animes as $anime): ?>
    <h3><?= $anime['name']?></h3>
    <div>
        <p><?= $anime['desc']?></p>
    </div>
    <div>
        <p>Le nombre d'ep : <?= $anime['ep']?></p>
        <p>Le nombre de saisons : <?= $anime['season']?></p> 
        <p>Les tags : <?= $anime['tags']?></p>
        <p>Le temps necessaire pour le regarder : <?= get_hour()?>h</p>
    </div>
    <hr>
    <?php endforeach;?>
</body>
</html>