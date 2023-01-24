<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <form action="../controllers/controller_inscription.php" method="post">
        <label for="form_nom">Nom</label>
        <input type="text" name="form_nom">
        <label for="form_prennom">Prénom</label>
        <input type="text" name="form_prenom">
        <label for="form_email">Email</label>
        <input type="text" name="form_email">
        <label for="form_password">Mot de passe</label>
        <input type="password" name="form_password">
        <!-- <input type="text"> -->
        <label for="form_image">Avatar</label>
        <input type="text" name="form_image">
        <input type="submit" value="S'inscrire">
        <input type="hidden" value="1" name="form_inscription">
    </form>


</body>

</html>