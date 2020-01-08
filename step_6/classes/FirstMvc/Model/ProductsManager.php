<?php
namespace FirstMvc\Model;

class ProductsManager extends Manager {
    
    public function getProducts() {

        $bdd = $this->dbConnect();
        
        $req = $bdd->query('SELECT id, name, category, price FROM products order by id');
        
        $result = $req->fetchAll();        

        $req->closeCursor();
         
        return $result;
    }
}