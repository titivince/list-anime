<?php
//création de la class
class Connection {
//  conection de la base de donnée
function pdo(){
    return new PDO('mysql:host=localhost;dbname=anime', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}}
?>