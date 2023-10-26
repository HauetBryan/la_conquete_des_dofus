<?php
// Création de la class countries, ajout des éléments de la table.
class countries
{
    public $id;
    public $name;
    private PDO $db;

    // connexion avec la base de données
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'Z0MBARR', 'Bryan998lol*');
    }

    // Création méthode getList de la table jgh99_countries
    public function getList()
    {
        $query = 'SELECT id, name FROM `jgh99_countries`;';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }

    // Création méthode pour vérifier sur l'id existe
    public function checkIfExistsById()
    {

        $query = "SELECT COUNT(*) FROM `jgh99_countries` WHERE `id` = :id";
        $request = $this->db->prepare($query);

        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }
}
