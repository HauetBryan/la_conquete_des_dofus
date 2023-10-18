<div class="questContainer">
    <h1>test</h1>
    <?php foreach ($question as $q) { ?>
        <div>
            <h2><?= $q->title ?></h2>
            <p><?= $q->username ?></p>
            <p><?= $q->content ?></p>
            <p><?= $q->datetime ?></p>
            <a href="question-<?= $q->id ?>">vvz</a>
        </div>
    <?php  } ?>
</div>