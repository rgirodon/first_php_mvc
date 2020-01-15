<?php
namespace FirstMvc\Model;

class Manager {

    protected function dbConnect() {
        
        return new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', 
                        DB_USER, 
                        DB_PASSWORD);
    }
}

