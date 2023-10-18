<?php

require_once '../../models/resistancesModel.php';

$resistance = new resistances;
$resistance->id_monsters = $_GET['id'];
echo json_encode($resistance->getResistancesByMonster());