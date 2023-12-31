<?php
// Création de la class users, ajout des éléments de la table.
class users
{
    public $id;
    public $username;
    public $password;
    public $email;
    public $id_ranks;
    public $id_countries;
    public $id_nationalities;
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

    // Ajout de l'utilisateur dans la base de données
    public function add()
    {
        $query = 'INSERT INTO `jgh99_users` (`username`, `password`, `email`, `id_ranks`, `id_countries`, `id_nationalities`)
        VALUES (:username, :password, :email, 2, :id_countries, :id_nationalities)';

        $request = $this->db->prepare($query);

        $request->bindValue(':username', $this->username, PDO::PARAM_STR);
        $request->bindValue(':password', $this->password, PDO::PARAM_STR);
        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->bindValue(':id_countries', $this->id_countries, PDO::PARAM_INT);
        $request->bindValue(':id_nationalities', $this->id_nationalities, PDO::PARAM_INT);

        return $request->execute();
    }

    // Vérifie si le mail existe déjà
    public function checkIfExistsByEmail()
    {
        $query = "SELECT COUNT(*) FROM `jgh99_users` WHERE `email` = :email";

        $request = $this->db->prepare($query);

        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }

    // vérifie si l'identifiant existe déjà
    public function checkIfExistsByUsername()
    {
        $query = "SELECT COUNT(*) FROM `jgh99_users` WHERE `username` = :username";

        $request = $this->db->prepare($query);

        $request->bindValue(':username', $this->username, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }

    // Méthode pour hashé le mot de passe
    public function getHash()
    {
        $query = "SELECT `password` FROM `jgh99_users` WHERE `email` = :email";

        $request = $this->db->prepare($query);

        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }

    // Va rechercher les infos de l'utilisateur via la table jgh99_users
    public function getInfos()
    {
        $query = 'SELECT `id`, `username`, `id_ranks` FROM `jgh99_users` WHERE `email` = :email';

        $request = $this->db->prepare($query);

        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_ASSOC);
    }

    // Supprime l'utilisateur
    public function delete()
    {
        $query = 'DELETE FROM `jgh99_users` WHERE `id` = :id';

        $request = $this->db->prepare($query);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $request->execute();
    }

    // Va rechercher toutes les informations de l'utilisateur
    public function getOneById()
    {
        $query = 'SELECT `username`, `email`, `N`.`name` AS `Nationalite`, `id_nationalities`, `id_countries`, `C`.`name` AS `Pays`
        FROM `jgh99_users` `U`
        INNER JOIN `jgh99_nationalities` AS `N` ON `N`.id = `U`.`id_nationalities`
        INNER JOIN `jgh99_countries` AS `C` ON `C`.`id` = `U`.`id_countries`
        WHERE `U`.`id` = :id';

        $request = $this->db->prepare($query);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        $request->execute();
        return $request->fetch(pdo::FETCH_OBJ);
    }

    // Met à jour les informations de l'utilisateur
    public function update()
    {
        $query = 'UPDATE `jgh99_users`
        SET `username` = :username, `email` = :email, `id_nationalities` = :id_nationalities
        WHERE `id` = :id';

        $request = $this->db->prepare($query);

        $request->bindValue(':username', $this->username, PDO::PARAM_STR);
        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->bindValue(':id_nationalities', $this->id_nationalities, PDO::PARAM_INT);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $request->execute();
    }

    // Met à jour le mot de passe de l'utilisateur
    public function updatePassword()
    {

        $query = 'UPDATE `jgh99_users`
        SET `password` = :password
        WHERE `id` = :id';

        $request = $this->db->prepare($query);

        $request->bindValue(':password', $this->password, PDO::PARAM_STR);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $request->execute();
    }
}
