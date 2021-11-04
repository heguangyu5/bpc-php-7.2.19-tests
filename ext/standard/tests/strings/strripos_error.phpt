--TEST--
Test strripos() function : error conditions
--FILE--
<?php
/* Prototype  : int strripos ( string $haystack, string $needle [, int $offset] );
 * Description: Find position of last occurrence of a case-insensitive 'needle' in a 'haystack'
 * Source code: ext/standard/string.c
*/

echo "*** Testing strripos() function: error conditions ***";
echo "\n-- With Zero arguments --";
var_dump( strripos() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strripos(): 2 required, 0 provided in %s on line %d
 -- compile-error
