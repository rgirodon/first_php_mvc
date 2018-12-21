<?php
namespace FirstMvc\Model;

require 'Manager.php';

require '../domain/User.php';

use \FirstMvc\Domain\User as User;

class UsersManager extends Manager {
    
    public function getUsers() {
        
        $bdd = $this->dbConnect();
        
        $req = $bdd->query('SELECT id, firstname, lastname FROM user order by id');
        
        $users = [];
        
        while ($userRow = $req->fetch()) {
            
            $user = new User();
            
            $user->id = $userRow['id'];
            
            $user->firstname = $userRow['firstname'];
            
            $user->lastname = $userRow['lastname'];
            
            array_push($users, $user);
        }
        
        return $users;
    }
}