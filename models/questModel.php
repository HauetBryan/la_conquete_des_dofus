<?php
// Création de la class quest, ajout des éléments de la table.
class quest
{
    public $id;
    public $name;
    public $description;
    private PDO $db;


    // Connexion avec la base de données
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'Z0MBARR', 'Bryan998lol*');
        } catch (PDOException $e) {
            print "Erreur :" . $e->getMessage();
            die;
        }
    }

    // Va chercher la quête du dofus pourpre dans la base de données
    public function getQuestPourpre()
    {

        $query = 'SELECT `name`, `description` 
        FROM `jgh99_quests` 
        WHERE `id` = 1';

        $request = $this->db->query($query);
        return $request->fetch(PDO::FETCH_OBJ);
    }

    // Va chercher la quête du dofus emeraude dans la base de données
    public function getQuestEmeraude()
    {
        $query = 'SELECT `name`, `description` 
        FROM `jgh99_quests` 
        WHERE `id` = 2';

        $request = $this->db->query($query);
        return $request->fetch(PDO::FETCH_OBJ);
    }
}
