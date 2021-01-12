<div class="main-block d-flex">
        <?php
        foreach ($animes as $anime): ?>
            <div class="block">
                <?php
                $time = round($anime['time'] * $anime['ep'] / 60, 1);
                $m = $time;
                $h = $time;
                while ($m >= 1){
                    $m = $m - 1;
                }
                if ($m !== 1){
                    $h = round( $h , 0 , PHP_ROUND_HALF_UP);
                    if($h > $time ){
                     $h = $h - 1; 
                    }
                    $m = $m * 60;
                }else{
                    $h = round( $h , 0);
                    $m = 0;
                }
                ?>
                <h2 class="center"><?= $anime['name']?></h2>
                <p class="desc">synopsys : <?= excerpt($anime['desc'])?></p>
                <a href="<?= $anime['link']?>" target="_blank">Lien vidéo</a>
                <div class="info d-flex">
                    <p>Saisons : <?= $anime['season']?></p> 
                    <p>Total d'ep : <?= $anime['ep']?></p>
                    <p>Tags : <?= $anime['tags']?></p>
                </div>
                <div class="info d-flex">
                    <p>Duré d'un épsisode : <?= $anime['time']?> m</p>
                    <p>Durée total : <?=$h . ' h et ' . $m . ' m'?></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>