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
                    if (strlen($_POST["nom"]) < 3)
                    {
                        $error = "Le nom doit contenir au moins 3 caractères";
                    }
                    elseif (strlen($_POST["password"]) < 5)
                    {
                        $error = "Le mot de passe doit contenir au moins 5 caractères";
                    }
                    else
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
                }
                else
                    $error = "Veuillez remplir tous les champs";

            }
        }
        else if (isset($_POST["inscription"]))
        {
            if (isset($_POST["nom"]) && isset($_POST["password"]))
            {
                echo $_POST["nom"];
                echo $_POST["password"];

                if (strlen($_POST["nom"]) < 3)
                {
                    $error = "Le nom doit contenir au moins 3 caractères";
                }
                elseif (strlen($_POST["password"]) < 5)
                {
                    $error = "Le mot de passe doit contenir au moins 5 caractères";
                }
                else
                {
                    if ($userDao->insertNewUser($_POST["nom"], $_POST["password"]) == true)
                    {
                        $succes = "Compte créé avec succès";
                    }
                    else
                    {
                        $error = "Ce nom de compte est déjà utilisé";
                    }
                }
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