<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>Connexion</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="connect">
        <div class="connect-left">
            <h1>ADRAR Classrooms</h1>
            <h2>Bienvenue</h2>
            <form action="../controllers/controller_index.php" method="post">
                <label for="form_email">E-mail</label>
                <input type="text" name="form_email">
                <label for="form_password">Mot de passe</label>
                <input type="password" name="form_password">
                <input type="submit" name="form_connexion" id="button" value="Se connecter">            
            </form>
            <div id="my-signin2"></div>
            <a href="inscription.php">Pas encore inscrit ? Cliquez ici pour vous créer un compte</a>
            <script>
                function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                }
                function onFailure(error) {
                console.log(error);
                }
                function renderButton() {
                gapi.signin2.render('my-signin2', {
                    'scope': 'profile email',
                    'width': 240,
                    'height': 50,
                    'longtitle': true,
                    'theme': 'dark',
                    'onsuccess': onSuccess,
                    'onfailure': onFailure
                });
                }
            </script>
        </div>   
        <div class="connect-right">
            <div class="avis">
                <p>« J'étais musicien indépendant, mais la COVID a tout stoppé. On m'a parlé d'ADRAR Classrooms, ça m'a ouvert des opportunités professionnelles insoupçonnées. »</p>
                <h6>Bill - Développeur Full-Stack Junior</h6>
            </div>
            <img src="../image/bill-gates.png" alt="">
        </div>
    </div>


    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
     
</body>

</html>