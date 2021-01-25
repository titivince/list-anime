<?php
require('src/function.php');
require('src/pdo.php');

$pdo = (new Connection())->pdo();
if(isset($_POST["select"])){
    $sql = $pdo->query("SELECT * FROM list WHERE tags OR name OR plot LIKE '%{$_POST["select"]}%' ");
    $animes = $sql->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>Animes par cat</title>
</head>
<body>
<?php require('src/nav.html'); ?>
    <h1 class="center">Animes par tags</h1>
    <?php
    if(!empty($animes)){
        require('src/main-block.php');
    }else{
        echo '<h3 class="center">Aucun résultat</h3>';
    }
    ?>
</body>
</html>