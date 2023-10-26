<!-- Vue pour mettre à jour les informations de mon utilisateur -->

<main>
    <form action="/modifier-profil" method="post">

        <!-- IDENTIFIANT -->
        <label for="username">Identifiant</label>
        <input type="text" name="username" id="username" placeholder="exemple: Z0MBARR..." value="<?= $usersDetails->username ?>">
        <?php if (isset($formErrors["username"])) { ?>
            <p class="error-message"><?= $formErrors["username"] ?></p>
        <?php } ?>

        <!-- NATIONALITÉ -->
        <label for="nationalities">Votre nationalité :</label>
        <select name="nationalities" id="nationalities">
            <option disabled selected>Choisissez une nationalité</option>
            <?php foreach ($nationalitiesList as $n) { ?>
                <option value="<?= $n->id ?>" <?= $usersDetails->id_nationalities == $n->id ? "selected" : '' ?>><?= $n->name ?></option>
            <?php } ?>
        </select>
        <?php if (isset($formErrors["nationalities"])) { ?>
            <p class="error-message"><?= $formErrors["nationalities"] ?></p>
        <?php } ?>

        <!-- EMAIL -->
        <label for="email">Adresse mail :</label>
        <input type="email" name="email" id="email" placeholder="Bryanhauet8@gmail.com" value="<?= $usersDetails->email ?>">
        <?php if (isset($formErrors["email"])) { ?>
            <p class="error-message"><?= $formErrors["email"] ?></p>
        <?php } ?>

        <div class="formButtons">
            <a href="/profil" class="cancel">Annuler</a>
            <input name="update" type="submit" value="Envoyer">
        </div>
        <div class="success-message">
            <?php if (isset($success)) { ?>
                <p> <?= $success ?> </p>
            <?php } ?>
        </div>
    </form>

    <form action="#" method="post">
        <!-- MOT DE PASSE -->
        <label for="password">Nouveau mot de passe :</label>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
        <?php if (isset($formErrors["password"])) { ?>
            <p class="error-message"><?= $formErrors["password"] ?></p>
        <?php } ?>

        <!-- CONFIRMATION MOT DE PASSE -->
        <label for="passwordC">Confirmation du nouveau mot de passe :</label>
        <input type="password" name="passwordC" id="passwordC" placeholder="Entrez votre mot de passe">
        <?php if (isset($formErrors["passwordC"])) { ?>
            <p class="error-message"><?= $formErrors["passwordC"] ?></p>
        <?php } ?>
        <div class="formButtons">
            <a href="/profil" class="cancel">Annuler</a>
            <input name="updatePassword" type="submit" value="Envoyer">
        </div>
        <div class="success-message">
            <?php if (isset($success)) { ?>
                <p> <?= $success ?> </p>
            <?php } ?>
        </div>
    </form>
</main>