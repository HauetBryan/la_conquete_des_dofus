<main id="register">
    <h1>INSCRIPTION</h1>
    <form action="/inscription" method="post">

        <div class="form">
            <!-- IDENTIFIANT -->
            <label for="username">Identifiant</label>
            <input type="text" name="username" id="username" placeholder="exemple: Z0MBARR..." value="<?= @$_POST['username'] ?>">
            
            <!-- AGE -->
            <label for="age">Saisissez votre âge :</label>
            <select name="age" id="age">
                <option disabled selected>Mon âge</option>
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
                <?php foreach ($countriesList as $c) { ?>
                    <option value="<?= $c->id ?>" ><?= $c->name ?></option>
                <?php } ?>
            </select>

            <!-- NATIONALITÉ -->
            <label for="nationalite">Votre nationalité :</label>
            <select name="nationalite" id="nationalite">
                <option disabled selected>Française</option>
                <?php
                foreach ($nationalitiesList as $n) {
                    echo "<option value=\"$n->id\">$n->name</option>";
                }
                ?>
            </select>

            <!-- EMAIL -->
            <label for="email">Adresse mail :</label>
            <input type="text" name="email" id="email" placeholder="Bryanhauet8@gmail.com" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
           
            <!-- MOT DE PASSE -->
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
            
            <!-- CONFIRMATION MOT DE PASSE -->
            <label for="passwordc">Confirmation du mot de passe :</label>
            <input type="password" name="passwordc" id="passwordc" placeholder="Entrez votre mot de passe">
            
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
</main>