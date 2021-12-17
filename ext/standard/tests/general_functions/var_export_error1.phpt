--TEST--
Test var_export() function : error conditions
--FILE--
<?php
/* Prototype  : mixed var_export(mixed var [, bool return])
 * Description: Outputs or returns a string representation of a variable
 * Source code: ext/standard/var.c
 * Alias to functions:
 */

echo "*** Testing var_export() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing var_export() function with Zero arguments --\n";
var_dump( var_export() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function var_export(): 1 required, 0 provided in %s on line %d
 -- compile-error
