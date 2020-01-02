<?php
function getUsers() {
    
    $bdd = null;
    
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=firstmvc;charset=utf8', 'root', 'rgirodon');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    
    return $bdd->query('SELECT id, firstname, lastname FROM user order by id');
}