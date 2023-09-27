<?php

require_once '../../models/countriesModel.php';
require_once '../../models/usersModel.php';
require_once '../../models/nationalitiesModel.php';

// Créer un tableau $formErrors vide.
$formErrors = [];
// regex de username et de password.
$regex = [
    "username" => "/^[a-zA-Z0-9]{3,20}$/",
    'password' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
];

// instanciation de countries, nationalities et users.
$countries = new countries;
$countriesList = $countries->getList();

$nationalities = new nationalities;
$nationalitiesList = $nationalities->getList();

if (count($_POST) > 0) {

    $users = new users;

    if (!empty($_POST['username'])) {
        if (preg_match($regex["username"], $_POST["username"])) {
            $users->username = $_POST['username'];
            if ($users->checkIfExistsByUsername() > 0) {
                $formErrors["username"] = "Le nom d'utilisateur est déjà utilisé.";
            }
        } else {
            $formErrors["username"] = "Le nom d'utilisateur n'est pas valide. Il ne peut contenir que des minuscules, des majuscules et des chiffres.";
        }
    } else {
        $formErrors["username"] = "Le nom d'utilisateur est obligatoire.";
    }

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
        $formErrors["passwordC"] = "Le mot de passe doit être rempli, c'est obligatoire.";
    }
    
    if (!empty($_POST['email'])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $users->email = $_POST['email'];
            if ($users->checkIfExistsByEmail() > 0) {
                $formErrors["email"] = "L'adresse mail est déjà utilisée.";
            }
        } else {
            $formErrors['email'] = 'Votre adresse e-mail n\'est pas valide. Elle ne peut comporter que des lettres, tirets, underscores, points et chiffres.';
        }
    } else {
        $formErrors["email"] = "L'addresse mail est obligatoire.";
    }

    if (!empty($_POST['countries'])) {
        $users->id_countries = $_POST['countries'];
        $countries->id = $_POST['countries'];
        if ($countries->checkIfExistsById() == 0) {
            $formErrors["countries"] = "Le pays est invalide, veuillez en choisir un de disponible dans la liste.";
        }
    } else {
        $formErrors["countries"] = "Le pays est obligatoire, saisissez-en un.";
    }

    if (!empty($_POST["nationalities"])) {
        $users->id_nationalities = $_POST['nationalities'];
        $nationalities->id = $_POST['nationalities'];
        if ($nationalities->checkIfExistsById() == 0) {
            $formErrors["nationalities"] = "La nationalité est invalide, veuillez en choisir une disponible dans la liste.";
        }
    } else {
        $formErrors["nationalities"] = "La nationalité est obligatoire";
    }
    if (count($formErrors) == 0) {
        if($users->add()) {
            $success = 'Votre inscription a bien été prise en compte.';
        }
    }
}

require_once '../../views/parts/header.php';
require_once '../../views/users/register.php';
require_once '../../views/parts/footer.php';
