<div class="main-block d-flex">
    <?php
    foreach ($animes as $anime): ?>
        <div class="block">
            <h2 class="center"><?= $anime['name']?></h2>
            <p>En cour de visionnage : <?= $anime['w'] ?></p>
            <a href="animes-en-pause.php?id=<?= $anime['id']?>">Mêtre en pause</a>
            <a href="animes-termine.php?id=<?= $anime['id']?>">Terminer</a>
        </div>
    <?php endforeach; ?>
</div>