<?php
namespace FirstMvc\Model;

use FirstMvc\Domain\User;

class UsersManager extends Manager {
    
    public function getUsers() {

        $users = [];

        $bdd = $this->dbConnect();
        
        $req = $bdd->query('SELECT id, firstname, lastname, password FROM user order by id');
        
        /*
        $result = $req->fetchAll();        

        $req->closeCursor();

        // remplir $users
        foreach($result as $item) {
        
            $user = new User($item['id'],
                                $item['firstname'],
                                $item['lastname'],
                                $item['password']);

            $users[] = $user;
        }
        */

        while ($item = $req->fetch()) {

            $user = new User($item['id'],
                                $item['firstname'],
                                $item['lastname'],
                                $item['password']);

            $users[] = $user;
        }

        $req->closeCursor();
         
        return $users;
    }
}