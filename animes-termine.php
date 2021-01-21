<?php
require('src/pdo.php');

$pdo = (new Connection())->pdo();
$sql = $pdo->query("SELECT * FROM new WHERE id = {$_GET['id']}");

$animes = $sql->fetch();
if(!empty($_POST['name'])){

    $name = $_POST["name"];
    $desc = $_POST["plot"];
    $link = $_POST["link"];
    $season = intval($_POST['season']);
    $ep = intval($_POST['ep']);
    $time = intval($_POST['time']);
    $tags = $_POST['tags'];

    $env = $pdo->query("INSERT INTO list (name, plot ,link ,season ,ep ,time ,tags)
    VALUES
    ('$name', '$desc', '$link', $season, $ep, $time,'$tags')");

    $del = $pdo->query("DELETE FROM new WHERE id = {$_GET['id']}");

    header("location: ../list-anime/");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>Document</title>
</head>
<body>
    <?php require('src/nav.html'); ?>
    <form class="center" action="" method="POST">
        <div>
            <label>Nom :</label>
            <input type="text" name="name" value="<?=$animes['name'] ?>">
        </div>
        <div>
            <label>La desc :</label>
            <input type="text" name="plot" placeholder="desc">
        </div>
        <div>
            <label>Un lien :</label>
            <input type="text" name="link" placeholder="lien">
        </div>
        <div>
            <label>Season</label>
            <input type="text" name="season" value="1">
        </div>
        <div>
            <label>Ep :</label>
            <input type="text" name="ep" value="12">
        </div>
        <div>
            <label>Temps par ep :</label>
            <input type="text" name="time" value="24">
        </div>
        <div>
            <label>Tags :</label>
            <input type="text" name="tags" placeholder="tags">
        </div>
        <input type="submit">
    </form>
</body>
</html>