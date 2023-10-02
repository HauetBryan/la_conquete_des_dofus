<main>
    <h1>Explication des 19 classes</h1>
<div class="cardsContainer">
    <?php foreach ($classesList as $c) { ?>
        <div class="card">
            <img src="<?= $c->image ?>" alt="<?= $c->name ?>">
            <div class="card-overlay">
                <p class="card-text">
                    <strong><?= $c->name ?></strong>
                    <br>
                    <?= $c->description ?>
                </p>
            </div>
        </div>
    <?php } ?>
</div>
</main>