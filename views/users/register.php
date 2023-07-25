<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/la_conquete_des_dofus/controllers/users/registerController.php" method="post">
        <label for="username">Identifiant</label>
        <input type="text" name="username" id="username" placeholder="exemple: Z0MBARR..." value="<?= @$_POST['username']?>">
        
        <label for="age">Votre âge :</label>
        <select name="age" id="age">
            <option disabled selected>18 ans</option>
                <?php 
                    for ($age = 1; $age <= 99; $age++) {
                        echo "<option value='$age'>$age ans</option>";
                    }
                ?>
        </select>
        
        <label for="email">Adresse mail :</label>
        <input type="text" name="email" id="email">
        <?php if (isset($_POST['email']) && empty($_POST['email'])) { ?>
            <p><?= 'Le champ e-mail est requis' ?></p>
        <?php } ?>
        
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">

        <label for="passwordc">Confirmation du mot de passe :</label>
        <input type="password" name="passwordc" id="passwordc">
        
        <input name="submit" type="submit" value="Envoyer">
    </form>
</body>
</html>