--TEST--
Test array_reverse() function : error conditions
--FILE--
<?php
/* Prototype  : array array_reverse(array $array [, bool $preserve_keys])
 * Description: Return input as a new array with the order of the entries reversed
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_reverse() : error conditions ***\n";

// zero arguments
echo "\n-- Testing array_reverse() function with Zero arguments --\n";
var_dump( array_reverse() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_reverse(): 1 required, 0 provided in %s on line %d
 -- compile-error
