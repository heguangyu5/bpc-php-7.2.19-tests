--TEST--
Test base64_encode() function : error conditions - wrong number of args
--FILE--
<?php
/* Prototype  : proto string base64_encode(string str)
 * Description: Encodes string using MIME base64 algorithm
 * Source code: ext/standard/base64.c
 * Alias to functions:
 */

echo "*** Testing base64_encode() : error conditions - wrong number of args ***\n";

// Zero arguments
echo "\n-- Testing base64_encode() function with Zero arguments --\n";
var_dump( base64_encode() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function base64_encode(): 1 required, 0 provided in %s on line %d
 -- compile-error
