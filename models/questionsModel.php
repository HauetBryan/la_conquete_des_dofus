<?php
// Création de la class questions, ajout des éléments de la table.
class questions
{
    public int $id = 0;
    public string $content = '';
    public string $title = '';
    public string $datetime = '';
    public int $id_users = 0;
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

    // Ajouter du contenu pour la base de données
    public function add()
    {
        $query = 'INSERT INTO `jgh99_questions` (`content`, `title`, `datetime`, `id_users`)
        VALUES (:content, :title, NOW(), :id_users)';

        $request = $this->db->prepare($query);

        $request->bindValue(':content', $this->content, PDO::PARAM_STR);
        $request->bindValue(':title', $this->title, PDO::PARAM_STR);
        $request->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);

        return $request->execute();
    }

    // Création méthode getList de la table jgh99_questions avec une jointure de jgh99_users
    public function getList()
    {
        $query = 'SELECT `Q`.`id`,`title`,`content`,`datetime`, `U`.`username`
        FROM `jgh99_questions` AS `Q`
        INNER JOIN `jgh99_users` AS `U` ON `U`.`id` = `Q`.`id_users`';

        $request = $this->db->query($query);

        return $request->fetchAll(PDO::FETCH_OBJ);
    }

    // Selectionne l'id de l'utilisateur
    public function getOneById()
    {

        $query = 'SELECT `title`,`content`,`datetime`, `U`.`username`
        FROM `jgh99_questions` AS `Q`
        INNER JOIN `jgh99_users` AS `U` ON `U`.`id` = `Q`.`id_users`
        WHERE `U`.`id` = :id';

        $request = $this->db->prepare($query);

        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        $request->execute();
        return $request->fetch(PDO::FETCH_OBJ);
    }

    // Met à jour le contenu de la question et son titre
    public function update()
    {
        $query = 'UPDATE `jgh99_questions`
        SET `content` = :content, `title` = :title, `datetime` = NOW()
        WHERE `id` = :id';

        $request = $this->db->prepare($query);

        $request->bindValue(':content', $this->content, PDO::PARAM_STR);
        $request->bindValue(':title', $this->title, PDO::PARAM_STR);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);

        return $request->execute();
    }

    // Supprime la question via l'id
    public function delete()
    {

        $query = 'DELETE FROM `jgh99_questions` WHERE `id` = :id';

        $request = $this->db->prepare($query);

        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $request->execute();
    }
}
