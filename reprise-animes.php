<?php
require('src/pdo.php');

$w = 'oui';

$pdo = (new Connection())->pdo();
$sql = $pdo->query("SELECT * FROM later WHERE id = {$_GET['id']}");

$animes = $sql->fetch();

$env = $pdo->query("INSERT INTO new (name, w)
    VALUES
    ('$name', '$w')");

$del = $pdo->query("DELETE FROM later WHERE id = {$_GET['id']}");

header("location: ../list-anime/");