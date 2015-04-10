<?php
    require_once 'core/DAO/PathologieDao.php';

    $dom = new DOMDocument('1.0', 'UTF-8');

    $racine = $dom->createElement("listPathos");
    $racine = $dom->appendChild($racine);

    $cnx = null;
    $pathologieDao = new PathologieDao($cnx);
    $pathos = $pathologieDao->getPathos();
    foreach($pathos as $patho)
    {
        /*echo $patho["type"]."<br>";
        echo $patho["desc1"]."<br>";
        echo $patho["nom"]."<br>";
        echo $patho["element"]."<br>";
        echo $patho["desc2"]."<br>";*/
        $fils = $dom->createElement("pathologie");
        $fils = $racine->appendChild($fils);
        $fils->appendChild($dom->createElement('meridien',$patho["type"]));
        $fils->appendChild($dom->createElement('symptome',$patho["desc1"]));
        $fils->appendChild($dom->createElement('type',$patho["nom"]));
        $fils->appendChild($dom->createElement('desc','title of song2.mp3'));
    }



    $dom->save("pathos.xml");