<?php
    include('../models/connect.php');
    include('../views/view_accueil.php');

    if(empty($_SESSION["user"])) {        
  // Permet de détruire la session PHP courante ainsi que toutes les données rattachées
        session_destroy();
        header("Location: ../views/view_index.php");
    }
?>