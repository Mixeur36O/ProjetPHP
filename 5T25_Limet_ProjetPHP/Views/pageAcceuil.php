
<h1>Les mods créer par la communauté</h1>

    <?php if ($uri === "/mesMods") : ?>
        <h1>Vos mods</h1>
    <?php else : ?>
        <h1>Liste des mods répertoriées</h1>
    <?php endif ?>

    <?php if (isset($_SESSION["user"])) : ?>
        <a href="createMod">Créer un mod</a>
    <?php endif ?>

<div class="flexible wrap space-around">
    <?php foreach ($mod as $newMod) : ?>
        <div class="border card">
            <h2 class="center"><?= $newMod->modNom ?></h2>
            <div>
                <div>
                    <img src="<?= $newMod->modPhoto ?>" alt="photo du mod">
                </div>
                <div class="center">
                    <p><span>Date de parution<?=$newMod->modDate ?> - </span> <span><?=$newMod->modVersion ?></span></p>
                    <a href="voirEcole.php?schoolId=<?=$newMod->modID ?>" class="btn btn-page">Voir le mod plus en détail</a>
                    <?php if ($uri ==="/mesMods") : ?>
                        <p><a href="deleteMod?modID=<?= $newMod->modID ?>">Supprimer le mod</a></p>
                        <p><a href="updateEcole?modID=<?= $newMod->modID ?>">Modifier le mod</a></p>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach  ?>
</div>

 