<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=firstmvc;charset=utf8', 'root', 'rgirodon');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT id, firstname, lastname FROM user order by id');

$users = $req->fetchAll();

$req->closeCursor();

require 'view.php';