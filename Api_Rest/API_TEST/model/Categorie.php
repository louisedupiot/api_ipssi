<?php
class Categorie {
    private $connexion ;
    private $table = "categorie";
    
    public $id ;
    public $name ;

    /**
     * @param $db
     */

    public function __construct($db){
        $this->connexion = $db ;
    }
    
    /**
     * @return void 
     */
    public function read(){
        $sql = "select c.name FROM $this->table ";

        $query = $this->connexion->prepare($sql);
        $query->execute();

        return $query;
    }

}



