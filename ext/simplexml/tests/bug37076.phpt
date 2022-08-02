--TEST--
Bug #37076 (SimpleXML ignores .=)
--SKIPIF--
skip TODO property/dim write/unset
--FILE--
<?php
$xml = simplexml_load_string("<root><foo /></root>");
$xml->foo = "foo";
$xml->foo .= "bar";
print $xml->asXML();
?>
===DONE===
--EXPECT--
<?xml version="1.0"?>
<root><foo>foobar</foo></root>
===DONE===
