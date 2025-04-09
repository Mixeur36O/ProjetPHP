<?php

    function createUser($pdo){
        try {
            $query = 'insert into utilisateur (utiNom, utiPrenom, utiEmail, utiPseudo, utiMotDePasse, utiRole, utiPhotoProfil)
            values (:utiNom, :utiPrenom, :utiEmail, :utiPseudo, :utiMotDePasse, :utiRole, :utiPhotoProfil)';
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'utiNom' => $_POST["nom"],
                'utiPrenom' => $_POST["prenom"],
                'utiEmail' => $_POST["email"],
                'utiPseudo' => $_POST["login"],
                'utiMotDePasse' => $_POST["mot_de_passe"],
                'utiRole' => 'user',
                'utiPhotoProfil' => ""
            ]);
        } catch (PDOEXCEPTION $e) {
            $message = $e->getMessage();
            die($message);  }
    }

    function connectUser($pdo){
        try{
            $query = 'select * from utilisateur where utiPseudo = :utiPseudo and utiMotDePasse = :utiMotDePasse';
            $connectUser = $pdo->prepare($query);
            $connectUser->execute([
                'utiPseudo' => $_POST["login"],
                'utiMotDePasse' => $_POST["mot_de_passe"]
            ]);
            $user = $connectUser->fetch();
            if (!$user){
                return false;
            }
            else{
                $_SESSION["user"] = $user;
                return true;
            }
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die($message); }
    }
    function updateUser($pdo){
        try{
            $query = 'update utilisateur set utiNom = :utiNom, utiPrenom = :utiPrenom, utiPseudo = :utiPseudo, utiMotDePasse = :utiMotDePasse, utiEmail = :utiEmail, utiRole = :utiRole where utiID = :utiID';
            $ajouteUser = $pdo->prepare($query);
            $ajouteUser->execute([
                'utiNom' => $_POST["nom"],
                'utiPrenom' => $_POST["prenom"],
                'utiPseudo' =>$_POST["login"],
                'utiMotDePasse' => $_POST["mot_de_passe"],
                'utiEmail' => $_POST["email"],
                'utiRole' => 'admin',
                'utiID' => $_SESSION["user"]->utiID
            ]);
        } catch (PDOEXCEPTION $e) {
            $message = $e->getMessage();
            die($message);
        }
    }
    
    function updateSession($pdo){
        try{
            $query = 'select * from utilisateur where utiID = :utiID';
            $selectUser = $pdo->prepare($query);
            $selectUser->execute([
                'utiID' => $_SESSION["user"]->utiID
            ]);
            $user = $selectUser->fetch();
            $_SESSION["user"] = $user;
        } catch (PDOException $e) {
            $message = $e->getMessage();
            die($message);
        }
    }