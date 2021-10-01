--TEST--
Test array_fill() function : error conditions
--FILE--
<?php
/* Prototype  : proto array array_fill(int start_key, int num, mixed val)
 * Description: Create an array containing num elements starting with index start_key each initialized to val
 * Source code: ext/standard/array.c
*/


echo "*** Testing array_fill() : error conditions ***\n";

// Zero arguments
echo "-- Testing array_fill() function with Zero arguments --\n";
var_dump( array_fill() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_fill(): 3 required, 0 provided in %s on line %d
 -- compile-error
