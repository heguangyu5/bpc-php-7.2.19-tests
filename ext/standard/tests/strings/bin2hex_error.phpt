--TEST--
Test bin2hex() function : error conditions
--FILE--
<?php

/* Prototype  : string bin2hex  ( string $str  )
 * Description: Convert binary data into hexadecimal representation
 * Source code: ext/standard/string.c
*/

echo "*** Testing bin2hex() : error conditions ***\n";

echo "\n-- Testing bin2hex() function with no arguments --\n";
var_dump( bin2hex() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function bin2hex(): 1 required, 0 provided in %s on line %d
 -- compile-error
