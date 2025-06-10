    <?php $uri = $_SERVER["REQUEST_URI"];?>
    <?php if ($uri === "/mesMods") : ?>
        <h1>Vos mods</h1>
    <?php else : ?>
        <h1>Les mods créer par la communauté</h1>
    <?php endif ?>

    <?php if (isset($_SESSION["user"])) : ?>
        <a class="voirMod" href="modCree">Créer un mod</a>
    <?php endif ?>

<div class="flexible flex-warp space-around">
    <?php foreach ($mod as $newMod) : ?>
        <div class="border card">
            <h2 class="center"><?= $newMod->modNom ?></h2>
            <div class="mod">
                <div>
                    <img class="IMG flexible" src="<?= $newMod->modPhoto ?>" alt="photo du mod">
                </div>
                <div class="center">
                    <?php if ($newMod ->modTaille > 10000) : ?>
                        <p>La taille de votre mod est de <?=$newMod->modTaille?> To</p>
                    <?php elseif ($newMod ->modTaille > 1000) : ?>
                        <p>La taille de votre mod est de <?=$newMod->modTaille?> Go</p>
                    <?php elseif ($newMod ->modTaille > 100) : ?>
                        <p>La taille de votre mod est de <?=$newMod->modTaille?> Mo</p>
                    <?php else : ?>
                        <p>La taille de votre mod est de <?=$newMod->modTaille?> Ko</p>
                    <?php endif ?>
                    <p><span>Date de parution <?=$newMod->modDate ?> - </span> <span><?=$newMod->modVersion ?></span></p>
                    <?php if ($uri ==="/mesMods") : ?>
                        <p><a class="voirMod" href="deleteMod?modID=<?= $newMod->modID ?>" class="petitsLiens lienModif">Supprimer le mod</a></p>
                        <p><a class="voirMod" href="updateMod?modID=<?= $newMod->modID ?>" class="petitsLiens lienModif">Modifier le mod</a></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach  ?>
</div>

 