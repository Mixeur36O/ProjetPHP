<?php
 
function  selectAllMods($pdo){
    try {
        $query = 'select * from mods';
        $selectMod = $pdo->prepare($query);
        $selectMod->execute();
        $mods = $selectMod->fetchAll();
        return $mods;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}