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
            <div class="user-div">
                <img src="../avatars/<?=$_SESSION['user']['utilisateur_image']?>" alt="" class="user-img">
            </div>
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
                <!-- <textarea name="form_cours" id="" cols="30" rows="10"></textarea> -->
                <input type="text" name="form_cours">
                <input type="submit" value="Ajouter">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_titre">Modifier par titre</label>
                <input type="text" name="form_titre">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_titre">Supprimer par titre</label>
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
            <form>
                <label for="form_nom">Nom</label>
                <input type="text" name="form_nom" id="form_nom">
                <label for="form_prenom">Prénom</label>
                <input type="text" name="form_prenom" id="form_prenom">
                <label for="form_email">Email</label>
                <input type="text" name="form_email" id="form_email">
                <label for="form_mot_de_passe">Mot de passe</label>
                <input type="password" name="form_mot_de_passe" id="form_mot_de_passe">
                <label for="form_image">Avatar</label>
                <input type="file" name="form_image" id="form_image">
                <a href="#" onclick="ajoutUtilisateur();">Ajouter</a>
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_email">Modifier par email</label>
                <input type="text" name="form_email">
                <input type="submit" value="Supprimer">
                <input type="hidden" value="1" name="form_inscription">
            </form>
        </div>
        <div class="edit">
            <form action="../controllers/controller_inscription.php" method="post" >
                <label for="form_email">Supprimer par email</label>
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

    <script>
            async function ajoutUtilisateur() {
                event.preventDefault();
                var formData = new FormData();
                formData.append('form_inscription', 1);
                formData.append('form_nom', document.querySelector('#form_nom').value);
                formData.append('form_prenom', document.querySelector('#form_prenom').value);
                formData.append('form_email', document.querySelector('#form_email').value);
                formData.append('form_mot_de_passe', document.querySelector('#form_mot_de_passe').value);
                formData.append('form_image', document.querySelector('#form_image').files[0]);

                await fetch("../controllers/controller_inscription.php", {
                    method: "POST",
                    body: formData
                })
                .then((response) => response.json())
                .then((result) => {
                   console.log(result);
                });
            }
    </script>
    
</body>

</html>