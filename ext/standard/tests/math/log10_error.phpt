--TEST--
Test wrong number of arguments for log10()
--INI--
precision = 14
--FILE--
<?php
/*
 * proto float log10(float number)
 * Function is implemented in ext/standard/math.c
*/

$arg_0 = 1.0;
$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(log10($arg_0, $extra_arg));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function log10(): 1 at most, 2 provided in %s on line %d
 -- compile-error
