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
            <fieldset>
                <legend>Se connecter</legend>
                <form action="#" method="POST">
                    <p>
                        <label for="nom">Login : </label>
                        <input name="nom" id="nom" type="text" placeholder="Votre pseudo"/>
                    </p>
                    <p>
                        <label for="password">Mot de passe : </label>
                        <input name="password" id="password" type="password" placeholder="Mot de passe"/>
                    </p>
                    <p>
                        <button type="submit">Se connecter</button>
                    </p>
                </form>
            </fieldset>
        </div>
    </body>

</html>

