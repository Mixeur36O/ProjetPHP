
<h1>Liste des écoles répertoriées</h1>

<div class="flexible wrap space-around">
    <?php foreach ($mod as $newMod) : ?>
        <div class="border card">
            <h2 class="center"><?= $newMod->modNom ?></h2>
            <div>
                <div>
                    <img src="<?= $newMod->modPhoto ?>" alt="photo de l'école">
                </div>
                <div class="center">
                    <p><span><?=$school->schoolAdresse ?> - </span> <span><?= $school->schoolCodePostal . " " . $school->schoolVille ?></span></p>
                    <h3><?=$school->schoolNumero ?></h3>
                    <a href="voirEcole.php" class="btn btn-page">Voir l'école</a>
                </div>
            </div>
        </div>
    <?php endforeach  ?>
</div>
