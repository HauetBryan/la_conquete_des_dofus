<main>
    <h1>Bonjour <?= $_SESSION['user']['username'] ?> voici votre profil</h1>
    <form action="/profil" method="post" class="profilUti">
        <p>Votre adresse mail : <?= $usersDetails->email ?> </p>
        <p>Votre identifiant : <?= $usersDetails->username ?> </p>
        <p>Votre Pays de naissance : <?= $usersDetails->Pays ?> </p>
        <p>Votre nationalité : <?= $usersDetails->Nationalite ?> </p>
        <p>Vous pouvez modifier votre profil ci-dessous</p>
        <a href="/modifier-profil">Modifier mon profil</a>

    </form>
    <button class="open-modal-btn butondelete">Supprimer mon compte</button>

    <div id="modal-container" class="modal-container">
        <form action="/profil" method="post" class="modal-confirme">
            <div class="modal">
                <div class="modal-header">
                    <span class="close-btn">X</span>
                </div>
                <div class="modal-content">
                    <p>Êtes-vous sûr de vouloir supprimé votre compte ?</p>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Supprimer mon compte" name="delete" class="modaldelete">
                    <span class="close-btn">Annuler</span>
                </div>
            </div>
        </form>
    </div>
</main>