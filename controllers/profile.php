<?php
    require_once 'core/DAO/UserDao.php';
    $userDao = new UserDao();
    $error="";
    $succes = "";
    if (isset($_SESSION["nom"]))
        $smarty->assign("user", $_SESSION["nom"]);

    if(isset($_POST["deleteProfile"]))
    {
        if ($userDao->deleteUser($_SESSION["nom"]))
        {
            session_unset();
            header('Location: ?page=index');
        }
        $error = "Erreur dans la suppression du profile";
    }
    else if (isset($_POST["saveProfile"]))
    {
        if (isset($_POST["nom"]) && isset($_POST["mdp"]) && isset($_POST["mdpNew"]) && isset($_POST["mdpCheck"]))
        {
            if (strlen($_POST["nom"]) < 3)
                $error = "Votre nom doit contenir au minimum 3 caractères";
            else if (strlen($_POST["mdp"]) < 5 || $userDao->controleMdp($_SESSION["nom"], $_POST["mdp"]) != true)
                $error = "Votre ancien mot de passe n'est pas bon";
            else if (strlen($_POST["mdpNew"]) < 5)
                $error = "Votre mot de passe doit contenir au minimum 5 caractères";
            else if (strlen($_POST["mdpCheck"]) < 5)
                $error = "Le contrôle de votre mot de passe n'est pas bon";
            else if ($_POST["mdpNew"] != $_POST["mdpCheck"])
                $error = "Le nouveau mot de passe et le contrôle ne correspondent pas";
            else {
                $userDao->updateUser($_SESSION["nom"], $_POST["mdpNew"]);
                $succes = "Votre profile a bien été mis à jour";
            }
        }
        else
        {
            $error = "Veuillez remplri tous les champs";
        }
    }

    $smarty->assign("error", $error);
    $smarty->assign("succes", $succes);