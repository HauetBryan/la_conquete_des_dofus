<main id="register">
    <h1>INSCRIPTION</h1>
    <form action="/inscription" method="post">

        <div class="form">
            <!-- IDENTIFIANT -->
            <label for="username">Identifiant</label>
            <input type="text" name="username" id="username" placeholder="exemple: Z0MBARR..." value="<?= @$_POST['username'] ?>">
            <?php if (isset($formErrors["username"])) { ?>
                <p class="error-message"><?= $formErrors["username"] ?></p>
            <?php } ?>

            <!-- PAYS -->
            <label for="countries">Pays de naissance :</label>
            <select id="countries" name="countries">
                <option disabled selected>France</option>
                <?php foreach ($countriesList as $c) { ?>
                    <option value="<?= $c->id ?>"><?= $c->name ?></option>
                <?php } ?>
            </select>
            <?php if (isset($formErrors["countries"])) { ?>
                <p class="error-message"><?= $formErrors["countries"] ?></p>
            <?php } ?>

            <!-- NATIONALITÉ -->
            <label for="nationalities">Votre nationalité :</label>
            <select name="nationalities" id="nationalities">
                <option disabled selected>Française</option>
                <?php foreach ($nationalitiesList as $n) { ?>
                    <option value="<?= $n->id ?>"><?= $n->name ?></option>
                <?php } ?>
            </select>
            <?php if (isset($formErrors["nationalities"])) { ?>
                <p class="error-message"><?= $formErrors["nationalities"] ?></p>
            <?php } ?>

            <!-- EMAIL -->
            <label for="email">Adresse mail :</label>
            <input type="email" name="email" id="email" placeholder="Bryanhauet8@gmail.com" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
            <?php if (isset($formErrors["email"])) { ?>
                <p class="error-message"><?= $formErrors["email"] ?></p>
            <?php } ?>

            <!-- MOT DE PASSE -->
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
            <?php if(isset($formErrors["password"])) { ?>
                <p class="error-message"><?= $formErrors["password"] ?></p>    
            <?php } ?>

            <!-- CONFIRMATION MOT DE PASSE -->
            <label for="passwordC">Confirmation du mot de passe :</label>
            <input type="password" name="passwordC" id="passwordC" placeholder="Entrez votre mot de passe">
            <?php if(isset($formErrors["passwordC"])) { ?>
                <p class="error-message"><?= $formErrors["passwordC"] ?></p>    
            <?php } ?>

            <div class="button">
                <button type="submit" class="annuler">Annuler</button>
                <button name="submit" type="submit" class="envoyer">Envoyer</button>
            </div>
        </div>
    </form>
    <script src="../../assets/js/script.js"></script>
</main>