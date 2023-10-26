<!-- la quête du dofus emeraude qui vient de la base de données -->

<?php
session_start();

require_once "../../models/questModel.php";

$quests = new quest();

$questsEmeraude = $quests->getQuestEmeraude();

require_once "../../views/parts/header.php";
require_once "../../views/quest/dofus-emeraude.php";
require_once "../../views/parts/footer.php";