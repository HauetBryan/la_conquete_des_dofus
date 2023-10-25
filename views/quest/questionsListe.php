<main id="questionsliste">
    <div class="questContainer">
        <h1>N'hésitez pas, poser vos questions !</h1>
        <div class="questbuton">
            <a href="/questions">Poser ma question</a>
        </div>
        <?php foreach ($question as $q) { ?>
            <div class="questions">
                <p><?= $q->username ?></p>
                <h2 class="titlequestion"><?= $q->title ?></h2>
                <p><?= $q->content ?></p>
                <p><?= $q->datetime ?></p>
                <a href="question-<?= $q->id ?>">lire la suite</a>
            </div>
        <?php  } ?>
    </div>
</main>