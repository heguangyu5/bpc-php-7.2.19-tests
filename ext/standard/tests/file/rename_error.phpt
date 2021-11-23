--TEST--
Test rename() function: error conditions
--FILE--
<?php
/* Prototype: bool rename ( string $oldname, string $newname [, resource $context] );
   Description: Renames a file or directory
*/

echo "*** Testing rename() for error conditions ***\n";
//Zero argument
var_dump( rename() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function rename(): 2 required, 0 provided in %s on line %d
 -- compile-error
