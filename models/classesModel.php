<?php
// Création de la class, ajout des éléments de la table.
class classes
{
    public int $id = 0;
    public string $name = '';
    public string $description = '';
    public string $image = '';
    private PDO $db;

    // Connexion  avec la base de données
    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'Z0MBARR', 'Bryan998lol*');        } catch (PDOException $e) {
            header('Location:/erreur-generale');
            exit;
        }
    }

    // Création méthode getList de la table jgh99_classes
    public function getList() {
        $query = 'SELECT `id`, `name`, `description`, `image` FROM `jgh99_classes`';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}
