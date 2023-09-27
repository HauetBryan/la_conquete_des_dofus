<?php
class classes
{
    public int $id = 0;
    public string $name = '';
    public string $description = '';
    public string $image = '';
    private PDO $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            header('Location:/erreur-generale');
            exit;
        }
    }

    public function getList() {
        $query = 'SELECT `id`, `name`, `description`, `image` FROM `jgh99_classes`';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}
