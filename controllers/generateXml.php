<?php

require_once 'core/DAO/PathologieDao.php';

$dom = new DOMDocument('1.0', 'UTF-8');
$doctype = '<!DOCTYPE listPathos SYSTEM "listPathos.dtd">';
$racine = $dom->createElement("listPathos");
$racine = $dom->appendChild($racine);

$cnx = null;
$pathologieDao = new PathologieDao($cnx);
$pathos = $pathologieDao->getPathos();
foreach ($pathos as $patho) {
    $fils = $dom->createElement("pathologie");
    $idPatho = $dom->createAttribute("id");
    $idPatho->value = $patho["idP"];
    $fils->appendChild($idPatho);
    $fils = $racine->appendChild($fils);
    $fils->appendChild($dom->createElement('meridien', $patho["nom"]));
    $fils->appendChild($dom->createElement('meridienElem', $patho["element"]));
    $fils->appendChild($dom->createElement('typePatho', $patho["type"]));
    $fils->appendChild($dom->createElement('descPatho', $patho["desc1"]));
    $fils->appendChild($dom->createElement('descSympt', $patho["desc2"]));
}
$doctype . $dom->save("web/ressources/pathos.xml");

$xml = new DOMDocument;
$xml->load('web/ressources/pathos.xml');

$xsl = new DOMDocument;
$xsl->load('web/ressources/pathos.xsl');

$proc = new XSLTProcessor;
$proc->importStylesheet($xsl);

echo $proc->transformToXml($xml);
