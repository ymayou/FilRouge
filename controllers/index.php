<?php
    require_once 'core/DAO/UserDao.php';
    $userDao = new UserDao();
    $error = "";
    if(isset($_POST["connexion"]))
    {
        if (isset($_POST["nom"]) && isset($_POST["password"]))
        {
            if ($_POST["nom"] != "" && $_POST["password"] != "")
            {
                if ($userDao->connectUser($_POST["nom"], $_POST["password"]) == true)
                {
                    session_start();
                    $_SESSION["nom"] = $_POST["nom"];
                }
            }
            else
                $error = "Veuillez saisir toutes les informations";

        }
        else
        {
            $error = 'Saisir un nom  de compte et un mot de passe valide';
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
                    $error = "Compte créé";
                }
                else
                {
                    $error = "Veuillez saisir toutes les informations";
                }
            }
            else
                $error = "Veuillez saisir toutes les informations";
        }
        else
        {
            $error = 'Saisir un nom  de compte et un mot de passe';
        }
    }
    else
    {
        $error = "normal";
    }
    $smarty->assign('error', $error);