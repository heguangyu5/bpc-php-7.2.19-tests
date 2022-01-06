--TEST--
Test json_decode() function : error conditions
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php
echo "*** Testing json_decode() : error conditions ***\n";

echo "\n-- Testing json_decode() function with no arguments --\n";
var_dump(json_decode());

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function json_decode(): 1 required, 0 provided in %s on line %d
 -- compile-error
