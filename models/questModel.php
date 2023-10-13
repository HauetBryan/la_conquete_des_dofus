<?php

class quest
{
    public $id;
    public $name;
    public $description;
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'Z0MBARR', 'Bryan998lol*');
        } catch (PDOException $e) {
            print "Erreur :" . $e->getMessage();
            die;
        }
    }

    public function getQuestPourpre() {
        
        $query = 'SELECT `name`, `description` 
        FROM `jgh99_quests` 
        WHERE `id` = 1';

        $request = $this->db->query($query);
        return $request->fetch(PDO::FETCH_OBJ);
    }
}
