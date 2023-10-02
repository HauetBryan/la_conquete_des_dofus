<main>
    <h1>Bonjour <?= $_SESSION['user']['username'] ?> voici votre profil</h1>
    <form action="/profil" method="post">
        <div>
            <a href="views/users/update_profil.php">Modifier mon profil</a>
        </div>
        <input type="submit" value="Valider la suppression de mon compte" name="delete">
    </form>
</main>