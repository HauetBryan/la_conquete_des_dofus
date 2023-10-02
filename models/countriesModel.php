<?php
class countries
{
    public $id;
    public $name;
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=la_conquete_des_dofus;charset=utf8', 'Z0MBARR', 'Bryan998lol*');    }

    public function getList()
    {
        $query = 'SELECT id, name FROM `jgh99_countries`;';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
    public function checkIfExistsById()
    {

        $query = "SELECT COUNT(*) FROM `jgh99_countries` WHERE `id` = :id";
        $request = $this->db->prepare($query);

        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }
}