<?php
    // On inclut notre connecteur à la base de données
    include('../models/connect.php');
    include('../views/view_inscription.php');
   
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_inscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT utilisateur_email FROM utilisateurs WHERE utilisateur_email=:utilisateur_email;");
        $select->bindParam(":utilisateur_email", $_POST["form_email"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO utilisateurs(utilisateur_nom, utilisateur_prenom, utilisateur_email, utilisateur_mot_de_passe)
                                    VALUES(:utilisateur_nom, :utilisateur_prenom, :utilisateur_email, :utilisateur_mot_de_passe);");
            $insert->bindParam(":utilisateur_nom", $_POST['form_nom']);
            $insert->bindParam(":utilisateur_prenom", $_POST['form_prenom']);
            $insert->bindParam(":utilisateur_email", $_POST['form_email']);
            $insert->bindParam(":utilisateur_image", $_POST['form_image']);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $user_password = password_hash($_POST['form_password'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam(":utilisateur_mot_de_passe", $user_password);
            if($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style=”color: green;”>Inscription réussie.</p><a href="../views/view_index.php">Se connecter.</a>');
            }
            die('<p style=”color: red;”>Inscription échouée.</p><a href="../views/view_inscription.php">Réessayer.</a>');
        }
    }
?>