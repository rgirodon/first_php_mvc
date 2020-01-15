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

    public function getUser($id) {
        
        $user = null;
        
        $bdd = $this->dbConnect();
        
        $req = $bdd->prepare('SELECT id, firstname, lastname, password FROM user where id = :id');
        
        $req->bindParam(":id", $id);
        
        if ($req->execute()) {
            
            if ($userRow = $req->fetch()) {
                
                $user = new User($userRow['id'],
                                    $userRow['firstname'],
                                    $userRow['lastname'],
                                    $userRow['password']);
            }
        }
        
        $bdd = null;

        return $user;
    }

    public function insertUser($user) {
        
        $result = null;
        
        $bdd = $this->dbConnect();

        $query = $bdd->prepare("INSERT INTO user (firstname, lastname, password) VALUES (:firstName, :lastName, :password)");
        
        $query->bindParam(":firstName", $user->firstname);

        $query->bindParam(":lastName", $user->lastname);

        $query->bindParam(":password", $user->password);
        
        $query->execute();   
        
        $id = $bdd->lastInsertId();
        
        $user->id = $id;

        $bdd = null;
        
        return $id;
    }

    public function deleteUser($id) {
        
        $result = null;

        $bdd = $this->dbConnect();
        
        $query = $bdd->prepare("DELETE FROM user WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        $result = $query->execute();

        $bdd = null;

        return $result;
    }

    public function updateUser($user) {
        
        $result = null;

        $bdd = $this->dbConnect();
        
        $query = $bdd->prepare("UPDATE user 
                                    SET firstname = :firstName, 
                                        lastname = :lastName, 
                                        password = :password 
                                WHERE id = :id");
        
        $query->bindParam(":firstName", $user->firstname);
        
        $query->bindParam(":lastName", $user->lastname);

        $query->bindParam(":password", $user->password);
        
        $query->bindParam(":id", $user->id);
        
        $result = $query->execute();

        $bdd = null;

        return $result;
    }

    public function isValid($user) {
        
        $result = [];
        
        if ($user->firstname == '') {
            
            $result['user.firstname.required'] = "FirstName is required";
        }

        if (strlen($user->firstname) > 45) {
            
            $result['user.firstname.length'] = "FirstName is 45 char max";
        }
        
        if ($user->lastname == '') {
            
            $result['user.lastname.required'] = "LastName is required";
        }

        if (strlen($user->lastname) > 45) {
            
            $result['user.lastname.length'] = "LastName is 45 char max";
        }

        if ($user->password == '') {
            
            $result['user.password.required'] = "Password is required";
        }

        if (strlen($user->password) < 8) {
            
            $result['user.password.length'] = "Password is 8 char min";
        }

        if (strlen($user->password) > 45) {
            
            $result['user.password.length'] = "Password is 45 char max";
        }
        
        return $result;
    }
}