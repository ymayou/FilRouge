<?php
if (isset($_SESSION["nom"])){
    $user = $_SESSION["nom"];
    $smarty->assign("user", $user);
}
$xml = new DOMDocument;
$xml->load('./web/ressources/rss.xml');

$xsl = new DOMDocument;
$xsl->load('./web/ressources/full.xsl');

$proc = new XSLTProcessor;
$proc->importStylesheet($xsl);

echo $proc->transformToXml($xml);
?>