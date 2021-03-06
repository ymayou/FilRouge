<?php
    require_once 'core/DAO/PathologieDao.php';
    if (isset($_SESSION["nom"])){
        $user = $_SESSION["nom"];
        $smarty->assign("user", $user);
    }
    $dom = new DOMDocument('1.0', 'UTF-8');
    $doctype = '<!DOCTYPE listPathos SYSTEM "listPathos.dtd">';
    $racine = $dom->createElement("listPathos");
    $racine = $dom->appendChild($racine);

    $cnx = null;
    $pathologieDao = new PathologieDao($cnx);
    $pathos = $pathologieDao->getPathos();

    foreach($pathos as $patho)
    {
        $fils = $dom->createElement("pathologie");
        $idPatho = $dom->createAttribute("id");
        $idPatho->value = $patho["idP"];
        $fils->appendChild($idPatho);
        $fils = $racine->appendChild($fils);
        $fils->appendChild($dom->createElement('meridien',$patho["nom"]));
        $fils->appendChild($dom->createElement('meridienElem',$patho["element"]));
        $fils->appendChild($dom->createElement('typePatho',$patho["type"]));
        $fils->appendChild($dom->createElement('descPatho',$patho["desc1"]));
        $fils->appendChild($dom->createElement('descSympt',$patho["desc2"]));
    }
    $doctype.$dom->save("web/ressources/pathos.xml");

