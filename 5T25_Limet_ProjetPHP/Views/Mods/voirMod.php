
<div class="flexible wrap space-around">
    <?php foreach ($mod as $newMod) : ?>
        <h1><?php $newMod->$modNom ?></h1>
        <div class="border card">
            <div>
                <div>
                    <img src="<?= $newMod->modPhoto ?>" alt="photo du mod">
                </div>
                <div class="center">
                    <p><span>Date de parution<?=$newMod->modDate ?> - </span> <span><?=$newMod->modVersion ?></span></p>
                        
                </div>
            </div>
        </div>
    <?php endforeach  ?>
</div>