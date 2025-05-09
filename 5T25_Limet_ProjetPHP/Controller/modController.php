<?php

    require_once "Models/modModel.php";

    $uri = $_SERVER["REQUEST_URI"];

    //if($uri === "/mesMods"){
        //$mod = selectMyMods($pdo);
        //$title = "Mes mods";
        //$template = "Views/pageAcceuil.php";
        //require_once("Views/base.php");
    //}
    //elseif ($uri === "/createMod") {
        //if (isset($_POST['btnEnvoi'])) {
            //createMod($pdo);
            //$modID = $pdo->lastInsertID();
            //for ($i = 0; $i < count($_POST["type"]); $i++){
                //$typeID = $_POST["type"] [$i];
                //ajoutTypeMod($pdo, $typeID);
            //}
            //header("location:/mesMods");
        //}

        //$type = selectAllTypes($pdo);
        //$title = "Ajout d'un mod";
        //$template = "Views/Schools/modsCree.php";
        //require_once("Views/base.php");
    //}