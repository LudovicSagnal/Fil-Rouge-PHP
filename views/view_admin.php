<?php
    include("../models/connect.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="../style/admin.css?v=<?=date("H-i-s")?>">
    <script src="../script/deco.js?v=<?=date("H-i-s")?>" defer></script>
    <script src="../script/crud.js?v=<?=date("H-i-s")?>" defer></script>
</head>

<body>
    <nav>
        <img src="../image/adrar-classrooms-logo.svg" alt="">
        <h2>Classrooms</h2>
        <div class="navlink" id="navlink">
            <a href="view_accueil.php">Accueil</a>
            <a href="view_formation.php">Formations</a>
            <a href="view_admin.php" class="active">Administration</a>      
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

    
    <div class="dnone" id="deco">
        <?php if( isset($_SESSION['user']) && $_SESSION['user'] !== null ) { ?>
            <a href="../controllers/controller_deconnexion.php">Se déconnecter</a>
        <?php } ?>
    </div>
    <main>
        <h3>Cours</h3>
        <div class="card">           
            <button>Ajouter</button>
            <button>Modifier</button>
            <button>Supprimer</button>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_titre">Titre</label>
                <input type="text" name="form_titre">
                <label for="form_niveau">Niveau</label>
                <input type="number" name="form_niveau">
                <label for="form_temps">Temps</label>
                <input type="text" name="form_temps">
                <label for="form_cours">Cours</label>
                <input type="text" name="form_cours">
                <input type="submit" value="Ajouter">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_titre">Chercher par titre</label>
                <input type="text" name="form_titre">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_titre">Chercher par titre</label>
                <input type="text" name="form_titre">
            </form>
        </div>
        <h3>Utilisateurs</h3>
        <div class="card">            
            <button>Ajouter</button>
            <button>Modifier</button>
            <button>Supprimer</button>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_nom">Nom</label>
                <input type="text" name="form_nom">
                <label for="form_prennom">Prénom</label>
                <input type="text" name="form_prenom">
                <label for="form_email">Email</label>
                <input type="text" name="form_email">
                <label for="form_password">Mot de passe</label>
                <input type="password" name="form_password">
                <label for="form_image">Avatar</label>
                <input type="file" name="form_image">
                <input type="submit" value="Ajouter">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_email">Chercher par email</label>
                <input type="text" name="form_email">
                <input type="submit" value="Supprimer">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_email">Chercher par email</label>
                <input type="text" name="form_email">
                <input type="submit" value="Supprimer">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <h3>Formations</h3>
        <div class="card">           
            <button>Ajouter</button>
            <button>Modifier</button>
            <button>Supprimer</button>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_nom">Nom</label>
                <input type="text" name="form_nom">
                <label for="form_prennom">Prénom</label>
                <input type="text" name="form_prenom">
                <label for="form_email">Email</label>
                <input type="text" name="form_email">
                <label for="form_password">Mot de passe</label>
                <input type="password" name="form_password">
                <label for="form_image">Avatar</label>
                <input type="file" name="form_image">
                <input type="submit" value="Ajouter">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_nom">Nom</label>
                <input type="text" name="form_nom">
                <label for="form_prennom">Prénom</label>
                <input type="text" name="form_prenom">
                <label for="form_email">Email</label>
                <input type="text" name="form_email">
                <label for="form_password">Mot de passe</label>
                <input type="password" name="form_password">
                <label for="form_image">Avatar</label>
                <input type="file" name="form_image">
                <input type="submit" value="Ajouter">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_nom">Nom</label>
                <input type="text" name="form_nom">
                <label for="form_prennom">Prénom</label>
                <input type="text" name="form_prenom">
                <label for="form_email">Email</label>
                <input type="text" name="form_email">
                <label for="form_password">Mot de passe</label>
                <input type="password" name="form_password">
                <label for="form_image">Avatar</label>
                <input type="file" name="form_image">
                <input type="submit" value="Ajouter">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
    </main>

    
    
</body>

</html>