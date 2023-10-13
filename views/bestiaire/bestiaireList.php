<main>
    <h1>Monstres</h1>
    <div class="cardsContainer">
        <?php foreach ($monstersList as $m) { ?>
            <div class="card">
                <img src="<?= $m->image ?>" alt=" <?= $m->name ?>">
                <div class="card-overlay">
                    <p class="card-text">
                        <strong><?= $m->name ?></strong>
                        <br>
                        <?= $m->hpmin ?>
                        <br>
                        <i class="fa-solid fa-heart fa-beat-fade" style="color: #f08080;"></i>
                        <br>
                        <?= $m->hpmax ?>
                        <br>
                        <?= $m->pa ?>
                        <br>
                        <i class="fa-solid fa-star" style="color: #d4af37;"></i>
                        <br>
                        <?= $m->pm ?>
                        <br>
                        <i class="fa-solid fa-shoe-prints" style="color: #a1c049;"></i>                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</main>