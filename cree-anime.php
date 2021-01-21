<?php
if(!empty($_POST['name'])){
    require('src/pdo.php');

    $pdo = (new Connection())->pdo();

    $name = $_POST['name'];
    $w = $_POST['w'];

    $sql = $pdo->query("INSERT INTO new (name, w) VALUES ('$name', '$w')");
    header("location: animes-a-voir.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>Ajout anime</title>
</head>
<body>
    <?php require('src/nav.html'); ?>
    <form class="center" action="" method="POST">
        <div>
            <label>Nom de l'anime :</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>En cour de visionnage :</label>
            <input type="text" name="w">
        </div>
        <input type="submit" value="Ajouté">
    </form>
</body>
</html>