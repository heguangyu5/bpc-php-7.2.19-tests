--TEST--
test assertions in namespace (assertions completely disabled)
--SKIPIF--
skip TODO assert()
--INI--
zend.assertions=-1
assert.exception=0
--FILE--
<?php
namespace Foo;

var_dump(\assert(false));
var_dump(\assert(true));
var_dump(assert(false));
var_dump(assert(true));
?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)
