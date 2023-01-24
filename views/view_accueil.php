<?php
    include("../models/connect.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../style/accueil.css?v=<?=date("H-i-s")?>">
    <script src="../script/search.js?v=<?=date("H-i-s")?>" defer></script>
    <script src="../script/deco.js?v=<?=date("H-i-s")?>" defer></script>
</head>

<body>
    <nav>
        <img src="../image/adrar-classrooms-logo.svg" alt="">
        <h2>Classrooms</h2>
        <div class="navlink" id="navlink">
            <a href="view_accueil.php" class="active">Accueil</a>
            <a href="view_formation.php">Formations</a>
            <a href="view_admin.php">Administration</a>      
        </div>
        <img src="../image/loupe.svg" alt="" class="loupe">
        <div class="dnone" id="search">
            <input type="text" placeholder="Rechercher (langages, mots-clés, cours,...)" id="navsearch">
        </div>
        <div class="user-info">
            <p><?=$_SESSION['user']['utilisateur_prenom']?></p>
            <p><?=$_SESSION['user']['utilisateur_nom']?></p>
            <img src="../image/user.svg" alt="" class="user-img">
        </div>
        
    </nav>

    <main>
        <div class="div-top">
            <div class="div-top-left">
                <h2>Votre métier de demain, à portée de main</h2>
                <p>Développez de nouvelles compétences dans le domaine de l'informatique et intégrer la formation de votre choix.</p>
                <div>
                    <input type="submit" value="Démarrer ma candidature" class="but-candi">
                    <input type="submit" value="Découvrir les formations" class="but-form">
                </div>
            </div>
            <img src="../image/Ellipse big.svg" alt="">
            <div class="dnone" id="deco">
                <?php if( isset($_SESSION['user']) && $_SESSION['user'] !== null ) { ?>
                    <a href="../controllers/controller_deconnexion.php">Se déconnecter</a>
                <?php } ?>
            </div>
        </div>
        <div class="div-middle">
            <div class="middle-card">
                <img src="../image/Ellipse 1.svg" alt="">
                <h4>Diplômes certifiants</h4>
                <p>Nos parcours procurent des titres reconnus par l'État</p>
            </div>
            <div class="middle-card">
                <img src="../image/Ellipse 2.svg" alt="">
                <h4>Mentor</h4>
                <p>Un expert du secteur vous suit de manière régulière</p>
            </div>
            <div class="middle-card">
                <img src="../image/Ellipse 3.svg" alt="">
                <h4>Remboursé si non embauché</h4>
                <p>Un expert du secteur vous suit de manière régulière</p>
            </div>
        </div>
        <div class="slider">
            <h3>Témoignages et sourires</h3>
            <img src="../image/Ellipse 4" alt="">
            <h4>Austin</h4>
            <p>"Too easy"</p>
            <div>
                <img src="../image/previous.svg" alt="" class="previous">
                <img src="../image/next.svg" alt="" class="next">
            </div>
        </div>
    </main>  

    <footer>
        <p>2023 © ADRAR Classrooms. Tous droits réservés.</p>
        <a href=""><img src="../image\chevron-up.svg" alt=""><img src="../image\chevron-up.svg" alt=""></a>
    </footer>

</body>

</html>