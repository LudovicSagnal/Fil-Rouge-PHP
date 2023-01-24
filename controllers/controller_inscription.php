<?php
    // On inclut notre connecteur à la base de données
    include('../models/connect.php');
    // include('../views/view_inscription.php');
    
    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if(!empty($_POST["form_inscription"])) {
        $success = false;
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT utilisateur_email FROM utilisateurs WHERE utilisateur_email=:utilisateur_email;");
        $select->bindParam(":utilisateur_email", $_POST["form_email"]);
        $select->execute();
        if(empty($select->fetch(PDO::FETCH_COLUMN))) {
            if (isset($_FILES['form_image'])) {
                // Stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
                $tmpName = $_FILES['form_image']['tmp_name'];
            
                // Stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
                $name = $_FILES['form_image']['name'];
               
                // Stocke la taille du fichier en octets
                $size = $_FILES['form_image']['size'];
               
                // Stocke les erreurs (problème d'import, de droits, etc...)
                $error = $_FILES['form_image']['error'];
               
                // Déplace le fichier importé dans le dossier image à la racine du projet
                $fichier = move_uploaded_file($tmpName, "../avatars/$name");
            }
            
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO utilisateurs(utilisateur_nom, utilisateur_prenom, utilisateur_email, utilisateur_mot_de_passe, utilisateur_image)
                                    VALUES(:utilisateur_nom, :utilisateur_prenom, :utilisateur_email, :utilisateur_mot_de_passe, :utilisateur_image);");
            $insert->bindParam(":utilisateur_nom", $_POST['form_nom']);
            $insert->bindParam(":utilisateur_prenom", $_POST['form_prenom']);
            $insert->bindParam(":utilisateur_email", $_POST['form_email']);
            $insert->bindParam(":utilisateur_image", $name);
            // Nous hachons notre mdp avec l'algo BCRYPT et un coût algorithmique (par défaut à 10)
            $user_password = password_hash($_POST['form_mot_de_passe'], PASSWORD_BCRYPT, array("cost" => 12));
            $insert->bindParam(":utilisateur_mot_de_passe", $user_password);
            if($insert->execute()) {
                // Si aucune erreur ne se produit
                $success = true;
            } 
        }
        die(json_encode(array(
            "success" => $success
        )));
    }
?>