--TEST--
Bug #70918 (Segfault using static outside of class scope)
--FILE--
<?php

try {
	parent::x;
} catch (Error $e) {
	var_dump($e->getMessage());
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot access parent:: when no class scope is active in %s on line %d
 -- compile-error
