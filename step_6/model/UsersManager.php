<?php
namespace FirstMvc\Model;

require 'Manager.php';

class UsersManager extends Manager {
    
    public function getUsers() {

        $result = [];
        
        $bdd = $this->dbConnect();
        
        $req = $bdd->query('SELECT id, firstname, lastname, password FROM user order by id');
        
        while ($data = $req->fetch()) {
            
            $userMap = ['id' => $data['id'], 
                     'firstname' => $data['firstname'], 
                     'lastname' => $data['lastname'], 
                     'password' => $data['password']];
            
            array_push($result, $userMap);
        }

        $req->closeCursor();
         
        return $result;
    }
}