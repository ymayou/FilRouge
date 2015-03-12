<?php
    if(isset($_POST["connexion"]))
    {
        if (isset($_POST["nom"]) && isset($_POST["password"]))
        {

        }
        else
        {
            $error = "Saisir un nom  de compte et un mot de passe valide";
        }
    }
    else if (isset($_POST["inscription"]))
    {
        if (isset($_POST["nom"]) && isset($_POST["password"]))
        {

        }
        else
        {
            $error = "Saisir un nom  de compte et un mot de passe";
        }
    }
    else
    {
        $smarty->assign("error", $error);
    }