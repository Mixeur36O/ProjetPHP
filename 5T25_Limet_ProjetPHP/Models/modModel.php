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