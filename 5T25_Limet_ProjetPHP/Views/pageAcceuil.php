    <?php $uri = $_SERVER["REQUEST_URI"];?>
    <?php if ($uri === "/mesMods") : ?>
        <h1>Vos mods</h1>
    <?php else : ?>
        <h1>Les mods créer par la communauté</h1>
    <?php endif ?>

    <?php if (isset($_SESSION["user"])) : ?>
        <a href="modCree">Créer un mod</a>
    <?php endif ?>

<div class="flexible wrap space-around">
    <?php foreach ($mod as $newMod) : ?>
        <div class="border card">
            <h2 class="center"><?= $newMod->modNom ?></h2>
            <div>
                <div>
                    <img class="IMG flexible" src="<?= $newMod->modPhoto ?>" alt="photo du mod">
                </div>
                <div class="center">
                    <p><span>Date de parution<?=$newMod->modDate ?> - </span> <span><?=$newMod->modVersion ?></span></p>
                    <a href="voirMod.php?modID=<?=$mod->modID ?>" class="btn btn-page">Voir le mod</a>
                    <?php if ($uri ==="/mesMods") : ?>
                        <p><a href="deleteMod?modID=<?= $mod->modID ?>" class="petitsLiens lienModif">Supprimer le mod</a></p>
                        <p><a href="deleteMod?modID=<?= $mod->modID ?>" class="petitsLiens lienModif">Modifier le mod</a></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach  ?>
</div>

 