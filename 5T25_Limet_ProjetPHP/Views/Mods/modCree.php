<div class="inscri">
    <div class="flex space-evenly wrap">
        <form method="post" action="">
            <fieldset>
                <legend>Création de votre mod</legend>
                <div class="mb-3">
                    <label for="Nom" class="form-label">Nom de votre mod</label>
                    <input type="text" placeholder="Nom" class="form-control" id="nom" name="nom" value="<?php if (isset($mod)) : ?><?= $mod->modNom ?><?php endif ?>">
                </div>
                <div class="mb-3">
                    <label for="Taille" class="form-label">Taille de votre mod</label>
                    <input type="text" placeholder="taille" class="form-control" id="taille" name="taille" value="<?php if (isset($mod)) : ?><?= $mod->modTaille ?><?php endif ?>">
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label">Photo du mod</label>
                    <input type="text" placeholder="photo en lien" class="form-control" id="photo" name="photo" value="<?php if (isset($mod)) : ?><?= $mod->modPhoto ?><?php endif ?>">
                </div>
                <div class="mb-3">
                    <label for="Date" class="form-label">Date d'aujourd'hui</label>
                    <input type="date" placeholder="..../../.." class="form-control" id="Date" name="Date" value="<?php if (isset($mod)) : ?><?= $mod->modDate ?><?php endif ?>">
                </div>
                <div class="mb-3">
                    <label for="version" class="form-label">Version du mod</label>
                    <input type="text" placeholder="version" class="form-control" id="version" name="version" value="<?php if (isset($mod)) : ?><?= $mod->modVersion ?><?php endif ?>">
                </div>
                <select name="type[]" id="type" multiple>
                    <?php foreach ($types as $type) : ?>
                        <option value="<?= $type->typeID ?>"
                            <?php if (isset($typeActiveMod)) : ?> <?php foreach ($typeActiveMod as $typeMod) : ?> <?php if ($type->typeID === $typeMod->typeID) : ?>selected<?php endif ?>
                            <?php endforeach ?>
                            <?php endif ?>>
                            <?= $type->typeNom ?>
                        </option>
                    <?php endforeach ?>
                </select>
                <div>
                <button name="btnEnvoi" class="btn btn-primary" value="btnEnvoi"><?php if (isset($mod)) : ?>Modifier <?php else : ?> Créer <?php endif ?></button>
                </div>
            </fieldset>
        </form>
    </div>
</div>