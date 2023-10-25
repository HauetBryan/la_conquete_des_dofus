<main>
    <h1>Monstres</h1>
    <div class="cardsContainer">
        <?php foreach ($monstersList as $m) { ?>
            <div class="card">
                <img src="<?= $m->image ?>" alt=" <?= $m->name ?>">
                <div class="card-overlay">
                    <div class="card-text">
                        <strong id="fontsize"><?= $m->name ?></strong>
                        <p><i class="fa-solid fa-heart fa-beat-fade" style="color: #f08080;"></i> <?= $m->hpmin ?>/<?= $m->hpmax ?></p>
                        <p><i class="fa-solid fa-star" style="color: #d4af37;"></i> <?= $m->pa ?></p>
                        <p><i class="fa-solid fa-shoe-prints" style="color: #a1c049;"></i> <?= $m->pm ?></p>
                        <div class="questbutonstat">
                            <button class="btn open-modal-btn" idmonster="<?= $m->id ?>">Voir les stats</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</main>

<div id="modal-container" class="modal-container">
    <div class="modal">
        <div class="modal-header">
            <span class="close-btn">X</span>
        </div>
        <div class="modal-content">
            <div class="statsContainer">
                <table>
                    <thead>
                        <tr>
                            <th>Élément</th>
                            <th>Pourcentage Min</th>
                            <th>Pourcentage Max</th>
                        </tr>
                    </thead>
                    <tbody class="statBody">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/ajaxMonster.js"></script>