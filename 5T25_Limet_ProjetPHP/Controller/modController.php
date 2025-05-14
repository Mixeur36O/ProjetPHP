<?php

    require_once "Models/modModel.php";

    $uri = $_SERVER["REQUEST_URI"];

    if($uri === "/mesMods"){
        $mod = selectMyMods($pdo);
        $title = "Mes mods";
        $template = "Views/pageAcceuil.php";
        require_once("Views/base.php");
    }
    elseif ($uri === "/modCree") {
        if (isset($_POST['btnEnvoi'])) {
            createMod($pdo);
            $modID = $pdo->lastInsertID();
            for ($i = 0; $i < count($_POST["type"]); $i++){
                $typeID = $_POST["type"] [$i];
                ajoutTypeMod($pdo, $typeID);
            }
        }
        var_dump("ccc");
        $type = selectAllTypes($pdo);
        $title = "Ajout d'un mod";
        $template = "Views/Mods/modCree.php";
        require_once("Views/base.php");
    }
    elseif (isset($_GET["modID"]) && $uri === "/voirMod?modID=" . $_GET["modID"]){
        if (isset($_POST['btnEnvoi'])){
            updateMod($pdo);
            deleteTypeMod($pdo);
            for ($i = 0; $i < count($_POST["type"]); $i++) {
                $typeID = $_POST["type"] [$i];
                ajoutTypeMod($pdo, $_GET["modID"], $typeID);
            }
            header("location:/mesMods");
        }
        $mod = selectOneMod($pdo);
        $typeActiveMod = selectTypeActiveMod($pdo);
        $title ="Mise à jour d'une école";
        $template ="Views/Mods/modCree.php";
        require_once("Views/base.php");
    }
    elseif (isset($_GET["modID"]) && $uri === "/deleteMod?modID=" . $_GET["modID"]){
        deleteTypeMod($pdo);
        deleteOneMod($pdo);
        header("location:/mesMods");
    }
    

