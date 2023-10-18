<?php
class resistances
{
    public int $id = 0;
    public int $pourcentagemin = 0;
    public int $pourcentagemax = 0;
    public int $id_elements = 0;
    public int $id_monsters = 0;
    private PDO $db;

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'Z0MBARR', 'Bryan998lol*');        } catch (PDOException $e) {
            header('Location:/erreur-generale');
            exit;
        }
    }

    public function getResistancesByMonster() {
        $query = 'SELECT   `e`.`name` AS `element`, `pourcentagemin`, `pourcentagemax`,`e`.`image` AS `elementImg`
        FROM `jgh99_resistances` AS `r`
        INNER JOIN `jgh99_elements` AS `e`ON `e`.`id` = `r`.`id_elements`
        WHERE `id_monsters` = :id_monsters';
        $request = $this->db->prepare($query);
        $request->bindValue(':id_monsters', $this->id_monsters,PDO::PARAM_INT);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_OBJ);
    }





}