<?php
    require_once 'core/DAO/MeridienDao.php';
    $cnx = null;
    $meridienDao = new MeridienDao($cnx);
    $listeCarac = $meridienDao->findAllCaracteristique('', '', '');
    $smarty->assign('listeCarac', $listeCarac);