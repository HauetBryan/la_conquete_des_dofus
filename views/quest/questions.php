<!-- Ma vue de ma page pour poser sa question -->

<main id="questions">
    <h1>La boîte à questions : Vos réponses commencent ici !</h1>
    <?php
    if (isset($success)) { ?>
        <p><?= $success ?></p>
    <?php } ?>
    <form action="/questions" method="post">
        <label for="title">Titre de la question :</label>
        <input type="text" name="title" id="title" placeholder="Le titre">
        <?php if (isset($formErrors['title'])) { ?>
            <p class="error-message"><?= $formErrors['title'] ?></p>
        <?php } ?>

        <label for="content">Posez votre question :</label>
        <textarea name="content" id="content" cols="50" rows="10" placeholder="Saisissez votre question ici"></textarea>
        <?php if (isset($formErrors['content'])) { ?>
            <p class="error-message"><?= $formErrors['content'] ?></p>
        <?php } ?>
        <input type="submit" value="Envoyer ma question" name="submit">
        <div class="questbuton">
            <a href="/questionsliste">Continuer vers d'autres questions</a>
        </div>
    </form>
</main>