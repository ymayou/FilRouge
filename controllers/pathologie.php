<?php
    require_once 'core/DAO/MeridienDao.php';
    require_once 'core/DAO/PathologieDao.php';
    
    $element     = (isset($_POST['caracteristique'])) ? $_POST['caracteristique'] : '';
    $typePatho   = (isset($_POST['categorie'])) ? $_POST['categorie'] : '';
    $nomMeridien = (isset($_POST['nomMeridien'])) ? $_POST['nomMeridien'] : '';
    $recherche   = (isset($_POST['recherche'])) ? $_POST['recherche'] : '';
    $type = $typePatho.$element;
    
    if (isset($_SESSION["nom"]))
        $smarty->assign("user", $_SESSION["nom"]);
    
    $smarty->assign('caracCourant', $element);
    $smarty->assign('typeCourant', $typePatho);
    $smarty->assign('nomCourant', $nomMeridien);
    
    $cnx = null;
    $meridienDao = new MeridienDao($cnx);
    
    //Retourne tous les nom des caractéristiques
    $listeCarac = $meridienDao->findAllCaracteristique('', '', '');
    $smarty->assign('listeCarac', $listeCarac);
    
    //Retourne tous les nom des méridiens poyr la datalist
    $listeNomMeridien = $meridienDao->getAllName();
    $smarty->assign('listeNomMeridien', $listeNomMeridien);
     
    $pathologieDao = new PathologieDao($cnx);
    //Liste tous les type de pathologie
    $listeTypePatho = $pathologieDao->listeTypePatho();
    $smarty->assign('listeTypePatho', $listeTypePatho);
    
    if(isset($recherche) && $recherche != '')
        $listePatho = $pathologieDao->recherche($recherche);
    else
        $listePatho = $pathologieDao->listePatho($nomMeridien, $type);

    $smarty->assign('listePatho', $listePatho);