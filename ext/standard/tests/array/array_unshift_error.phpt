--TEST--
Test array_unshift() function : error conditions
--FILE--
<?php
/* Prototype  : int array_unshift(array $array, mixed $var [, mixed ...])
 * Description: Pushes elements onto the beginning of the array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_unshift() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing array_unshift() function with Zero arguments --\n";
var_dump( array_unshift() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_unshift(): 2 required, 0 provided in %s on line %d
 -- compile-error
