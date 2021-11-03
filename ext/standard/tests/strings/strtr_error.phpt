--TEST--
Test strtr() function : error conditions
--FILE--
<?php
/* Prototype  : string strtr(string str, string from[, string to])
 * Description: Translates characters in str using given translation tables
 * Source code: ext/standard/string.c
*/

echo "*** Testing strtr() : error conditions ***\n";

echo "\n-- Testing strtr() function with Zero arguments --";
var_dump( strtr() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strtr(): 2 required, 0 provided in %s on line %d
 -- compile-error
