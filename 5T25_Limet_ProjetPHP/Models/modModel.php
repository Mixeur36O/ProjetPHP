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