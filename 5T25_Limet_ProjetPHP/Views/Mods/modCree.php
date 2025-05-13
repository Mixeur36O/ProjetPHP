
<div class="inscri">
    <div class="flex space-evenly wrap">
        <form method="post" action="">
            <fieldset>
                <legend>Création de votre mod</legend>
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom de votre mod</label>
                    <input type="text" placeholder="Nom" class="form-control" id="nom" name="nom"  <?php if (isset($_SESSION['user'])) : ?> value="<?=$_SESSION['user']->modNom ?>" <?php endif ?> required>
                </div>
                <div class="mb-3">
                    <label for="Taille" class="form-label">Taille de votre mod</label>
                    <input type="text" placeholder="taille" class="form-control" id="taille" name="taille" <?php if (isset($_SESSION['user'])) : ?> value="<?=$_SESSION['user']->modTaille ?>" <?php endif ?> required>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo du mod</label>
                    <input type="text" placeholder="photo en lien" class="form-control" id="photo" name="photo" <?php if (isset($_SESSION['user'])) : ?> value="<?=$_SESSION['user']->modPhoto ?>" <?php endif ?> required>
                </div>
                <div class="mb-3">
                    <label for="Date" class="form-label">Date d'aujourd'hui</label>
                    <input type="date" placeholder="..../../.." class="form-control" id="Date" name="Date" <?php if (isset($_SESSION['user'])) : ?> value="<?=$_SESSION['user']->modDate ?>" <?php endif ?> required>
                </div>
                <div class="mb-3">
                    <label for="version" class="form-label">Version du mod</label>
                    <input type="version" placeholder="version" class="form-control" id="version" name="version" <?php if (isset($_SESSION['user'])) : ?> value="<?=$_SESSION['user']->modVersion ?>" <?php endif ?> required>
                </div>
                <select name="type[]" id="type-select" multiple>
                    <?php foreach ($types as $type)  : ?>
                        <option value="<?= $type->typeID ?>"><?= $type->nom ?></option>
                    <?php endforeach ?>    
                </select>
                <?php if (isset($_SESSION["user"])) : ?>
                    <div>
                        <button name="btnEnvoi" class="btn btn-primary" value="btnEnvoi"><?php if (isset($_SESSION['user'])) : ?>Modifier <?php else : ?> Envoyer <?php endif ?></button>
                        <button name="btnSupp" class="btn btn-primary" value="btnSupp"><?php if (isset($_SESSION['user'])) : ?>Supprimer<?php endif ?></button>
                    </div>
                <?php else : ?>
                    <div>
                        <button name="btnEnvoi" class="btn btn-primary" value="btnEnvoi"><?php if (isset($_SESSION['user'])) : ?>Modifier <?php else : ?> Envoyer <?php endif ?></button>
                    </div>
                <?php endif ?>
            </fieldset>
        </form>
    </div>
</div>