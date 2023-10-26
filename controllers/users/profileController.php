<!-- Le controller du profil utilisateur -->

<?php
session_start();

require_once "../../models/usersModel.php";


$user = new users();

$user->id = $_SESSION['user']['id'];

$usersDetails = $user->getOneById();


if (isset($_POST['delete'])) {
    if($user->delete()){
        unset($_SESSION['user']);
        session_destroy();
        header('Location: /accueil');
        exit;
    }
}
require_once "../../views/parts/header.php";
require_once "../../views/users/profile.php";
require_once "../../views/parts/footer.php";