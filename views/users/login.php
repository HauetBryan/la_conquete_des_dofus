<main id="login">
    <h1>Connexion</h1>
    <form action="/connexion" method="post" class="formlogin">
            <label for="email">Adresse mail</label>
            <input type="email" name="email" id="email" placeholder="Bryanhauet8@gmail.com">
            <?php if (isset($formErrors['email'])) { ?>
                <p><?= $formErrors['email'] ?></p>
            <?php } ?>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="******">
            <?php if (isset($formErrors['password'])) { ?>
                <p><?= $formErrors['password'] ?></p>
            <?php } ?>
            
            <div class="sendlogin">
                <input type="submit" name="connexion" value="Se connecter">
            </div>
    </form>
</main>