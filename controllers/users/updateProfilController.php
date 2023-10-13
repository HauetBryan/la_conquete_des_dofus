<?php
session_start();

require_once "../../models/usersModel.php";
require_once "../../models/nationalitiesModel.php";

// Créer un tableau $formErrors vide.
$formErrors = [];
// regex de username et de password.
$regex = [
    "username" => "/^[a-zA-Z0-9]{3,20}$/",
    'password' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
];

$nationalities = new nationalities;
$nationalitiesList = $nationalities->getList();

$users = new users;

$users->id = $_SESSION['user']['id'];

if (isset($_POST['update'])) {


    if (!empty($_POST['username'])) {
        if (preg_match($regex["username"], $_POST["username"])) {
            $users->username = $_POST['username'];
            if ($users->checkIfExistsByUsername() > 0 && $_POST['username'] != $_SESSION['user']['username']) {
                $formErrors["username"] = "Le nom d'utilisateur est déjà utilisé.";
            }
        } else {
            $formErrors["username"] = "Le nom d'utilisateur n'est pas valide. Il ne peut contenir que des minuscules, des majuscules et des chiffres.";
        }
    } else {
        $formErrors["username"] = "Le nom d'utilisateur est obligatoire.";
    }

    if (!empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $users->email = $_POST['email'];
            if ($users->checkIfExistsByEmail() > 0 && $_POST['email'] != $_SESSION['user']['email']) {
                $formErrors["email"] = "L'adresse mail est déjà utilisée.";
            }
        } else {
            $formErrors['email'] = 'Votre adresse e-mail n\'est pas valide. Elle ne peut comporter que des lettres, tirets, underscores, points et chiffres.';
        }
    } else {
        $formErrors["email"] = "L'addresse mail est obligatoire.";
    }

    if (!empty($_POST["nationalities"])) {
        $users->id_nationalities = $_POST['nationalities'];
        $nationalities->id = $_POST['nationalities'];
        if ($nationalities->checkIfExistsById() == 0) {
            $formErrors["nationalities"] = "La nationalité est invalide, veuillez en choisir une disponible dans la liste.";
        }
    } else {
        $formErrors["nationalities"] = "La nationalité est obligatoire.";
    }
    if (count($formErrors) == 0) {
        if ($users->update()) {
            $_SESSION['user'] = $users->getInfos();
            $_SESSION['user']['email'] = $_POST['email'];
            $success = 'Vos modifications ont bien été effectués';
        }
    }
}

if (isset($_POST['updatePassword'])) {
    if (!empty($_POST['password'])) {
        if (!preg_match($regex["password"], $_POST["password"])) {
            $formErrors["password"] = "Le mot de passe n'est pas valide. Il ne peut contenir que des lettres, des chiffres, des numéros et des caratères spéciaux.";
        }
    } else {
        $formErrors["password"] = "Le mot de passe doit être rempli, c'est obligatoire.";
    }

    if (!empty($_POST['passwordC'])) {
        if ($_POST["passwordC"] == $_POST["password"]) {
            $users->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        } else {
            $formErrors["passwordC"] = "Les mots de passe sont différents, veuillez mettre le même mot de passe.";
        }
    } else {
        $formErrors["passwordC"] = "La confirmation du mot de passe doit être rempli, c'est obligatoire.";
    }
    if (count($formErrors) == 0) {
        if ($users->updatePassword()) {
            $success = 'Votre mot de passe a bien était modifier';
        }
    }
}

$usersDetails = $users->getOneById();

require_once "../../views/parts/header.php";
require_once "../../views/users/updateProfil.php";
require_once "../../views/parts/footer.php";
