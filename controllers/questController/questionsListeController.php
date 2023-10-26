<!-- Regroupe toutes les questions poser par les utilisateur -->

<?php
session_start();
require_once "../../models/questionsModel.php";

$questions = new questions;
$question = $questions->getList();

require_once "../../views/parts/header.php";
require_once "../../views/quest/questionsListe.php";
require_once "../../views/parts/footer.php";