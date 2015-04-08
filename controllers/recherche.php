<?php
    require_once 'core/DAO/PathologieDao.php';

    if (isset($_POST["validRecherche"]))
    {
        $cnx = null;
        $resultat = null;
        $pathologie = new PathologieDao($cnx);
        $resultat = $pathologie->recherche($_POST["recherche"]);
        $smarty->assign('resultat', $resultat);
    }
