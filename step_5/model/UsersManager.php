<?php
require 'Manager.php';

class UsersManager extends Manager {
    
    public function getUsers() {
        
        $bdd = $this->dbConnect();
        
        return $bdd->query('SELECT id, firstname, lastname FROM user order by id');
    }
}