<!-- liste du bestiaire qui vient de la base de données -->

<?php
session_start();

require_once "../../models/monstersModel.php";

$monsters = new monsters;
$monstersList = $monsters->getList();

require_once "../../views/parts/header.php";
require_once "../../views/bestiaire/bestiaireList.php";
require_once "../../views/parts/footer.php";