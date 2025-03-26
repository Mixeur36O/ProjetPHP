<?php
     $uri = $_SERVER["REQUEST_URI"];

     if ($uri === "/connexion") {
         $title = "Connexion";
         $template = "Views/Users/connexion.php";
         require_once("Views/base.php");
     }
     elseif ($uri === "/deconnexion"){

     }
     elseif ($uri ==="/inscription"){
        $title = "Inscription";
        $template = "Views/Users/inscription.php";
        require_once("Views/base.php");
     }