<?php
    require_once 'core/DAO/UserDao.php';
    $userDao = new UserDao();
    $error = "";
    $succes="";
    if(!isset($_SESSION["nom"]))
    {
        if(isset($_POST["connexion"]))
        {
            if (isset($_POST["nom"]) && isset($_POST["password"]))
            {
                if ($_POST["nom"] != "" && $_POST["password"] != "")
                {
                    if ($userDao->connectUser($_POST["nom"], $_POST["password"]) == true)
                    {
                        $_SESSION["nom"] = $_POST["nom"];
                        $succes = "Bonjour ".$_SESSION["nom"];
                        $user = $_SESSION["nom"];
                        $smarty->assign("user", $user);
                    }
                    else
                    {
                        $error="Erreur d'identification<br>Le mot de passe et le nom de correspondent pas";
                    }
                }
                else
                    $error = "Veuillez remplir tous le schamps";

            }
        }
        else if (isset($_POST["inscription"]))
        {
            if (isset($_POST["nom"]) && isset($_POST["password"]))
            {
                if ($_POST["nom"] != "" && $_POST["password"] != "")
                {
                    if ($userDao->insertNewUser($_POST["nom"], $_POST["password"]) == true)
                    {
                        $succes = "Compte créé avec succès";
                    }
                    else
                    {
                        $error = "Veuillez remplir tous les champs correctement";
                    }
                }
                else
                    $error = "Veuillez remplir tous les champs";
            }
        }
    }
    else
    {
        $user = $_SESSION["nom"];
        $smarty->assign("user", $user);

    }
    $smarty->assign('error', $error);
    $smarty->assign('succes', $succes);