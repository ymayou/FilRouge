<?php
    require_once 'core/DAO/PathologieDao.php';

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
