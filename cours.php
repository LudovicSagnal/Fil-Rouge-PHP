<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
    <link rel="stylesheet" href="style/cours.css">
    <script src="script/search.js" defer></script>
</head>

<body>
    <nav>
            <img src="image/adrar-classrooms-logo.svg" alt="">
            <h2>Classrooms</h2>
            <div class="navlink" id="navlink">
                <a href="accueil.php">Accueil</a>
                <a href="formation.php">Formations</a>
                <a href="">Administration</a>      
            </div>
            <img src="image/loupe.svg" alt="" class="loupe">
            <div class="dnone" id="search">
                <input type="text" placeholder="Rechercher (langages, mots-clés, cours,...)" id="navsearch">
            </div>
            <input type="submit" name="submit" value="Se connecter" id="navinput">
    </nav>

    <main>
        <div class="resume">
            <div class="resume-left">
                <h2>Titre</h2>
                <div class="inner-resume">
                    <img src="image/clock.svg" alt="">
                    <p>Temps</p>
                    <img src="image/signal.svg" alt="">
                    <p>Niveau</p>
                </div>
            </div>
            <div class="resume-right">
                <img src="image/file-pdf.svg" alt="">
                <p>Date de publication/mise à jour</p>
            </div>
        </div>
        <div>
            <div class="progress">
                <span class="dot"><img src="image/house.svg" alt="" class="inside-dot"></span>
                <div class="rectangle-line">
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                </div>
                <div class="rectangle-line">
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                </div>
                <div class="rectangle-line">
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle"></div>
                </div>              
                <span class="dot"><img src="image/certificate.svg" alt="" class="inside-dot"></span>
            </div>
            <div  class="cours">
                <h2>Titre du chapitre</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id viverra lacus. Pellentesque vitae elit pharetra, aliquet nibh non, varius sapien. Nullam ac purus a metus laoreet scelerisque. Fusce ullamcorper ornare ligula, vitae bibendum felis auctor nec. Donec vestibulum, lorem eu venenatis egestas, nulla libero maximus risus, eget sollicitudin felis arcu eu erat. Aliquam erat volutpat. Fusce ac lorem sed leo elementum placerat. Fusce feugiat, elit eget ornare fringilla, nisl mi sodales risus, sed volutpat nibh elit eget nunc. Sed sed metus dictum, rhoncus ipsum vulputate, tempus nisl. Donec pulvinar aliquam turpis ac varius. Donec posuere quis augue non interdum. Maecenas vehicula sapien nulla, placerat congue tortor consequat et. Proin tincidunt quam ac eleifend rutrum. Donec vel aliquet ligula, ac interdum purus. Nam sem tellus, accumsan nec vehicula at, feugiat vitae orci. Quisque porttitor nunc nisl, in ultricies velit condimentum ac.</p>
            </div>
            <div class="buttons">
                <input type="submit" class="valid" value="Je valide ce chapitre et je passe au suivant">
                <div>
                    <input type="submit" class="previous" value="< Passer au chapitre précédent">
                    <input type="submit" class="next" value="Passer au chapitre suivant >">
                </div>
            </div>


        </div>
        
    </main>


    <footer>
        <p>2023 © ADRAR Classrooms. Tous droits réservés.</p>
        <a href=""><img src="image\chevron-up.svg" alt=""><img src="image\chevron-up.svg" alt=""></a>
    </footer>
</body>

</html>