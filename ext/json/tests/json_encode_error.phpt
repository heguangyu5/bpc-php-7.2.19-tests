--TEST--
Test json_encode() function : error conditions
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
echo "*** Testing json_encode() : error conditions ***\n";

echo "\n-- Testing json_encode() function with no arguments --\n";
var_dump(json_encode());

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function json_encode(): 1 required, 0 provided in %s on line %d
 -- compile-error
