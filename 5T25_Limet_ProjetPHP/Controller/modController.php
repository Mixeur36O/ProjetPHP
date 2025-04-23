<?php

    require_once "Models/modModel.php";

    $uri = $_SERVER["REQUEST_URI"];

    if($uri === "/mesMods"){
        $mod = selectMyMods($pdo);
        $title = "Mes mods";
        $template = "Views/pageAcceuil.php";
        require_once("Views/base.php");
    }
    elseif ($uri === "/createMod") {
        # code...
    }