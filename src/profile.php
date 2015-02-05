<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Acupuncture</title>

    <link rel="stylesheet" type="text/css" href="../includes/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        include_once("menu.php");
    ?>
    <div class="content">
        <h1>Gestion du profile</h1>
        <div class="profileManagement">
            <form id="formProfile" method="post" action="#" >
                <p>
                    <label for="nom">Nom : </label>
                    <input id="nom" type="text" placeholder="Nom">
                </p>
                <p>
                    <label for="mdp">Mot de passe : </label>
                    <input id="mdp" type="password" placeholder="">
                    <input id="mdpNew" type="password" placeholder="">
                    <input id="mdpCheck" type="password" placeholder="">
                </p>
                <input id="deleteProfile" class="buttonProfile" type="submit" value="Supprimer mon profil">
                <input id="saveProfile" class="buttonProfile" type="submit" value="Savegarder">
            </form>
        </div>
    </div>
</body>
</html>

