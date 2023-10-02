<?php
session_start();

if(isset($_SESSION['user'])){
    header('Location: /accueil');
    exit;
}
require_once "../../models/usersModel.php";

$formErrors = [];

if (count($_POST) > 0) {

    $user = new users();

    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $user->email = $_POST['email'];
            if ($user->checkIfExistsByEmail() == 0) {
                $formErrors['email'] = $formErrors['password'] = 'L\'adresse mail ou le mot de passe est incorrect.';
            }
        } else {
            $formErrors['email'] = 'Votre adresse e-mail n\'est pas valide. Elle ne peut comporter que des lettres, tirets, underscores, points et chiffres.';
        }
    } else {
        $formErrors['email'] = 'Veuillez renseigner votre email';
    }

    if (!empty($_POST['password'])) {
        if (!isset($formErrors['email'])) {
            $user->password = $user->getHash();
            if (password_verify($_POST['password'], $user->password)) {
                $_SESSION['user'] = $user->getInfos();                
                header('Location:/accueil');
                exit;
            } else {
                $formErrors['email'] = $formErrors['password'] = 'L\'adresse mail ou le mot de passe est incorrect.';
            }
        }
    } else {
        $formErrors['password'] = 'Le mot de passe est obligatoire';
    }
}

require_once "../../views/parts/header.php";
require_once "../../views/users/login.php";
require_once "../../views/parts/footer.php";
