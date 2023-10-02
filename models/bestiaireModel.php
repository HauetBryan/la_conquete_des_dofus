<?php

class monsters {
    public int $id = 0;
    public string $name = "";
    public int $hpmin = 0;
    public int $hpmax = 0;
    public int $pa = 0;
    public int $pm = 0;
    public string $image = "";
    private PDO $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'Z0MBARR', 'Bryan998lol*');
        } catch (PDOException $e) {
            header('Location:/erreur-generale');
            exit;
        }
    }

    public function getList() {
        $query = "SELECT `id`, `name`, `hpmin`, `hpmax`, `pa`, `pm`, `image` FROM `jgh99_monsters`";
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}