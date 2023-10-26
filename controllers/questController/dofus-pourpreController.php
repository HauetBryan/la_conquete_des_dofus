<!-- quête du dofus pourpre qui vient de la base de données -->

<?php
session_start();
require_once "../../models/questModel.php";

$quests = new quest();

$questsPourpre = $quests->getQuestPourpre();


require_once "../../views/parts/header.php";
require_once "../../views/quest/dofus-pourpre.php";
require_once "../../views/parts/footer.php";