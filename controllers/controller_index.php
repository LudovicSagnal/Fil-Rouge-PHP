<?php
    include('../models/connect.php');
    include('../views/view_index.php');

    if(!empty($_POST["form_connexion"])) {
        $select = $db->prepare("SELECT * FROM utilisateurs WHERE utilisateur_email=:utilisateur_email;");
        $select->bindParam(":utilisateur_email", $_POST["form_email"]);
        $select->execute();
        // La fonction rowCount() permet de donner le nombre de lignes pour une requête
        if($select->rowCount() === 1) {
            $user = $select->fetch(PDO::FETCH_ASSOC);
            // Permet de vérifier le hash par rapport au mot de passe saisi
            if(password_verify($_POST["form_password"], $user['utilisateur_mot_de_passe'])) {
                // On affecte les données de notre utilisateur dans notre super globale $_SESSION
                $_SESSION['user'] = $user;
                // Le header permet d'effectuer une requête HTTP, la valeur Location permet la redirection vers un autre fichier
                header("Location: ../views/view_accueil.php");
            }
        } else {
            // La fonction unset permet de vider une variable, ici nous vidons les valeurs pour la clé “user”
            unset($_SESSION['user']);
        }
    }
?>