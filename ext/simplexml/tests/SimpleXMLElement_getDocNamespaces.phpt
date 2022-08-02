--TEST--
Testing getDocNamespaces() with invalid XML
--FILE--
<?php
$xml = @new SimpleXMLElement("X",1);
var_dump($xml->getDocNamespaces());
?>
--EXPECTF--
Entity: line 1: parser error : Start tag expected, '<' not found
X
^
bool(false)
