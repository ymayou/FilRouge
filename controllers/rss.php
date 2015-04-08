<?php
$xml = new DOMDocument;
$xml->load('ressources/rss.xml');

$xsl = new DOMDocument;
$xsl->load('ressources/full.xsl');

$proc = new XSLTProcessor;
$proc->importStylesheet($xsl);

echo $proc->transformToXml($xml);
?>