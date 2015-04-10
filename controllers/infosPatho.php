<?php
    require_once 'core/DAO/PathologieDao.php';
    if (isset($_SESSION["nom"])){
        $user = $_SESSION["nom"];
        $smarty->assign("user", $user);
    }
    $cnx = null;
    $sympt = "";
    $patho = "";
    $pathoDao = new PathologieDao($cnx);
    if(isset($_GET["idPatho"])){
        $id = $_GET["idPatho"];
        $patho = $pathoDao->getInfosPatho($id);
        $sympt = $pathoDao->getInfosSympt($id);
        $smarty->assign('infosPatho', $patho);
        $smarty->assign('symptomes', $sympt);
    }
