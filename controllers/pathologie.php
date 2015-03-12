<?php
    require_once 'core/DAO/MeridienDao.php';
    require_once 'core/DAO/PathologieDao.php';
    $cnx = null;
    $meridienDao = new MeridienDao($cnx);
    $listeCarac = $meridienDao->findAllCaracteristique('', '', '');
    $smarty->assign('listeCarac', $listeCarac);
    
    $pathologieDao = new PathologieDao($cnx);
    $listePatho = $pathologieDao->listePatho();
    //print_r($pathologieDao);
    $smarty->assign('listePatho', $listePatho);