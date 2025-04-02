<?php

function verifEmptyData(){
    foreach($_POST as $key => $value){
        if(empty(str_replace('','', $value))){
            $messageError[$key] = "Votre " . $key . " est vide.";
        }
    }
    if(isset($messageError)){
        return $messageError;
    }
    else {
        return false;
    }
}