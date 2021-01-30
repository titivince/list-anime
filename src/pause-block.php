<div class="main-block d-flex">
    <?php
    foreach ($animes as $anime): ?>
        <div class="block">
            <h2 class="center"><?= $anime['name']?></h2>
            <a href="<?= $anime['link'] ?>" target="_blank">Lien</a>
            <a href="repise-animes.php?id=<?= $anime['id'] ?>">Reprendre</a>
        </div>
    <?php endforeach; ?>
</div>