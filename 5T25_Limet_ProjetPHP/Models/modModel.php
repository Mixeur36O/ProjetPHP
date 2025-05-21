<?php
 
function  selectAllMods($pdo){
    try {
        $query = 'select * from mods';
        $selectMod = $pdo->prepare($query);
        $selectMod->execute();
        $mod = $selectMod->fetchAll();
        return $mod;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteModFromUser($dbh){
    try{
        $query = 'delete from typejeu where modID in (select modID from mods where utiID = :utiID)';
        $deleteAllModFromId = $dbh->prepare($query);
        $deleteAllModFromId->execute([
            'utiID' => $_SESSION["user"]->utiID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteAllModFromUser($pdo){
    try{
        $query = 'delete from mods where utiID = :utiID';
        $deleteAllModFromId = $pdo->prepare($query);
        $deleteAllModFromId->execute([
            'utiID' => $_SESSION["user"]->utiID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectMyMods($pdo){
    try {
        $query = 'select * from mods where utiID = :utiID';
        $selectMod = $pdo->prepare($query);
        $selectMod->execute([
            'utiID' => $_SESSION["user"]->utiID
        ]);
        $mod = $selectMod->fetchAll();
        return $mod;
    } catch (PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function selectAllTypes($pdo){
    try{
        $query = 'select * from type';
        $selectType = $pdo->prepare($query);
        $selectType->execute();
        $types = $selectType->fetchAll();
        return $types;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function createMod($pdo){
    
    try {
        $query = 'insert into mods (modNom, modTaille, modPhoto, modDate, modVersion, utiID)
        values (:modNom, :modTaille, :modPhoto, :modDate, :modVersion, :utiID)';
        $addMod = $pdo->prepare($query);
        $addMod->execute([
            'modNom' => $_POST["nom"],
            'modTaille' => $_POST["taille"],
            'modPhoto' => $_POST["photo"],
            'modDate' => $_POST["Date"],
            'modVersion' => $_POST["version"],
            'utiID' => $_SESSION["user"]->utiID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die ($message);
    }
}

function ajoutTypeMod($pdo,$modID,$typeID){
    try {
        $query = 'insert into typemods (typeID, modID) values (:typeID, :modID)';
        $deleteAllModFromId = $pdo->prepare($query);
        $deleteAllModFromId->execute([
            'typeID' => $typeID,
            'modID' => $modID
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function selectOneMod($pdo){
    try {
        $query = 'select * from mods where modID = :modID';
        $selectMod = $pdo->prepare($query);
        $selectMod->execute([
            'modID' => $_GET["modID"]
        ]);
        $mod = $selectMod->fetch();
        return $mod;
    }  catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }    
}

function selectTypeActiveMod($pdo){
    try{
        $query = "select * from type where typeID in (select typeID from typemods where typeID = :typeID);";
        $selectType = $pdo->prepare($query);
        $selectType->execute([
            'typeID' => $_GET["typeID"]
        ]);
        $types = $selectType->fetchAll();
        return $types;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function updateMod($dbh){
    try{
        $query = 'update mods set modNom = :modNom, modTaille = :modTaille, modPhoto = :modPhoto, 
        modDate = :modDate, modVersion = :modVersion, utiID = :utiID';
        $updateModFromID = $dbh->prepare($query);
        $updateModFromID->execute([
            'modNom' => $_POST["nom"],
            'modTaille' => $_POST["taille"],
            'modPhoto' => $_POST["photo"],
            'modDate' => $_POST["Date"],
            'modVersion' => $_POST["version"],
            'utiID' => $_POST["utiID"]
        ]);
    } catch (PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function deleteTypeMod($dbh){
    try{
        $query = 'delete from mods where typeID = typeID';
        $deleteAllModFromId = $dbh->prepare($query);
        $deleteAllModFromId->execute([
            'typeID' => $_GET["typeID"]
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function deleteOneMod($pdo){
    try{
        $query = 'delete from mods where modID = :modID';
        $deleteAllModsFromId = $pdo->prepare($query);
        $deleteAllModsFromId->execute([
            'modID' => $_GET["modID"]
        ]);
    } catch (PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}


