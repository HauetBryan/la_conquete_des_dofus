<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:/connexion');
    exit;
}

require_once "../../models/questionsModel.php";

$formErrors = [];

$regex = [
    "title" => "/^[\w\s À-ÿ !?.\'\"\-]+$/"
];



if (count($_POST) > 0) {
    $questions = new Questions;
    $questions->id_users = $_SESSION['user']['id'];
    if (!empty($_POST['title'])) {
        if (preg_match($regex['title'], $_POST['title'])) {
            $questions->title = $_POST['title'];
        } else {
            $formErrors['title'] = 'Le titre contient des caractères non autorisés.';
        }
    } else {
        $formErrors['title'] = 'Le titre est obligatoire, veuillez en mettre un !';
    }
    var_dump($_POST['title']);
    if (!empty($_POST['content'])) {
        $questions->content = strip_tags($_POST['content']);
    } else {
        $formErrors['content'] = 'Le contenu est obligatoire si vous voulez envoyer votre question';
    }



    if (count($formErrors) == 0) {
        if ($questions->add()) {
            $success = 'Votre question a bien été prise en compte.';
        }
    }
}

require_once "../../views/parts/header.php";
require_once "../../views/quest/questions.php";
require_once "../../views/parts/footer.php";
