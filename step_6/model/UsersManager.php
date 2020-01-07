<?php
namespace FirstMvc\Model;

require 'Manager.php';

class UsersManager extends Manager {
    
    public function getUsers() {

        $bdd = $this->dbConnect();
        
        $req = $bdd->query('SELECT id, firstname, lastname, password FROM user order by id');
        
        $result = $req->fetchAll();        

        $req->closeCursor();
         
        return $result;
    }
}