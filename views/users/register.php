<?php require_once '../../controllers/users/registerController.php'?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
</head>
<body>
    <h1>INSCRIPTION</h1>
    <form action="/la_conquete_des_dofus/controllers/users/registerController.php" method="post">

        <div class="form">
        <!-- IDENTIFIANT -->
            <label for="username">Identifiant</label>
            <input type="text" name="username" id="username" placeholder="exemple: Z0MBARR..." value="<?= @$_POST['username']?>">
        <!-- AGE -->
            <label for="age">Saisissez votre âge :</label>
            <select name="age" id="age">
                <option disabled selected>18 ans</option>
                    <?php 
                        for ($age = 1; $age <= 99; $age++) {
                            echo "<option value='$age'>$age ans</option>";
                        }
                    ?>
            </select>

        <!-- PAYS -->
        <label for="paysNaissance">Pays de naissance :</label>
        <select id="paysNaissance" name="paysNaissance">
            <option disabled selected>France</option>
        <?php 
            foreach($pays as $p) {
            echo '<option value="' . $p[1] . '" >' . $p[3] . '</option>';
            }
        ?>
    </select>

        <!-- NATIONALITÉ -->
        <label for="nationalite">Votre nationalité</label>
        <select name="nationalite" id="nationalite">
            <option disabled selected>Française</option>
        <?php
            foreach($nationalites as $nationalite) {
            echo "<option value=\"$nationalite\">$nationalite</option>";
            }
        ?>
    </select>  
        <!-- EMAIL -->
        <label for="email">Adresse mail :</label>
        <input type="text" name="email" id="email" placeholder="Bryanhauet8@gmail.com   ">
                <?php if (isset($_POST['email']) && empty($_POST['email'])) { ?>
                    <p><?= 'Le champ e-mail est requis' ?></p>
                <?php } ?>

        <!-- MOT DE PASSE -->
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
        <!-- CONFIRMATION MOT DE PASSE -->
            <label for="passwordc">Confirmation du mot de passe :</label>
            <input type="password" name="passwordc" id="passwordc">
        <!-- AVATAR -->
            <label for="avatar">Image de profil :</label>
            
            <div id="avatarPreviewContainer">
                <img id="avatarPreview" src="#" alt="Aperçu de l'avatar">
            </div>
            
            <input type="file" id="avatar" name="avatar" accept="image/*" onchange="previewAvatar(event)">
        <!-- QUESTION PLATFORME -->
        <h2>Quelle est votre plateforme de jeux vidéo préférée ?</h2>
        <div class="choix">
                <input type="checkbox" name="plateforme[]" value="PC"> PC<br>
                <input type="checkbox" name="plateforme[]" value="Playstation"> Playstation<br>
                <input type="checkbox" name="plateforme[]" value="Xbox"> Xbox<br>
                <input type="checkbox" name="plateforme[]" value="Autres"> Autres<br>
            </div>
            <label for="autres_plateformes">Précisez si vous avez cochez autres</label>
            <input type="text" name="autres_plateformes" placeholder="Autre plateforme" id="autres_plateformes"><br>
            
            <div class="button">
                <button type="submit" class="annuler">Annuler</button>
                <button name="submit" type="submit" class="envoyer">Envoyer</button>
            </div>
        </div>
    </form>
    <script src="../../assets/js/script.js"></script>
</body>
</html>