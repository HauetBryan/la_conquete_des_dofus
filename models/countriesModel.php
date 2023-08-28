<?php
class countries {
    public $id;
    public $name;
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'root', '');
    }

    public function getList() {
        $query = 'SELECT id, name FROM `jgh99_countries`;';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}

class nationalities {
    public $id;
    public $name;
    private $db;
    
    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'root', '');
    }

    public function getList() {
        $query = 'SELECT id, name FROM `jgh99_nationalities`';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}