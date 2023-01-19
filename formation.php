<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
    <link rel="stylesheet" href="style/formation.css">
    <script src="script/search.js" defer></script>
</head>

<body>
    <nav>
        <img src="image/adrar-classrooms-logo.svg" alt="">
        <h2>Classrooms</h2>
        <div class="navlink" id="navlink">
            <a href="accueil.php">Accueil</a>
            <a href="formation.php" class="active">Formations</a>
            <a href="">Administration</a>      
        </div>
        <img src="image/loupe.svg" alt="" class="loupe">
        <div class="dnone" id="search">
            <input type="text" placeholder="Rechercher (langages, mots-clés, cours,...)" id="navsearch">
        </div>
        <input type="submit" name="submit" value="Se connecter" id="navinput">
    </nav>

    <h3>Cours</h3>
    <select name="langages" id="">
        <option value="">Langages</option>
    </select>

    <main>
        <a href="cours.php" class="cours">
            <div class="green"></div>
            <div>
                <h6>Cours</h6>
                <h5>Titre</h5>
                <div class="inner-cours">
                    <img src="image/signal.svg" alt="">
                    <p>Niveau</p>
                    <img src="image/clock.svg" alt="">
                    <p>Temps</p>
                </div>
                <p>Synopsis</p>
            </div>
        </a>
        <a class="cours">
            <div class="yellow"></div>
            <div>
                <h6>Cours</h6>
                <h5>Titre</h5>
                <div class="inner-cours">
                    <img src="image/signal.svg" alt="">
                    <p>Niveau</p>
                    <img src="image/clock.svg" alt="">
                    <p>Temps</p>
                </div>
                <p>Synopsis</p>
            </div>
        </a>
        <a class="cours">
            <div class="red"></div>
            <div>
                <h6>Cours</h6>
                <h5>Titre</h5>
                <div class="inner-cours">
                    <img src="image/signal.svg" alt="">
                    <p>Niveau</p>
                    <img src="image/clock.svg" alt="">
                    <p>Temps</p>
                </div>
                <p>Synopsis</p>
            </div>
        </a>
        <a class="cours">
            <div class="blue"></div>
            <div>
                <h6>Cours</h6>
                <h5>Titre</h5>
                <div class="inner-cours">
                    <img src="image/signal.svg" alt="">
                    <p>Niveau</p>
                    <img src="image/clock.svg" alt="">
                    <p>Temps</p>
                </div>
                <p>Synopsis</p>
            </div>
        </a>
        <a class="cours">
            <div class="white"></div>
            <div>
                <h6>Cours</h6>
                <h5>Titre</h5>
                <div class="inner-cours">
                    <img src="image/signal.svg" alt="">
                    <p>Niveau</p>
                    <img src="image/clock.svg" alt="">
                    <p>Temps</p>
                </div>
                <p>Synopsis</p>
            </div>
        </a>
    </main>

    <footer>
        <p>2023 © ADRAR Classrooms. Tous droits réservés.</p>
        <a href=""><img src="image\chevron-up.svg" alt=""><img src="image\chevron-up.svg" alt=""></a>
    </footer>
    
</body>

</html>