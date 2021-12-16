--TEST--
Test get_resource_type() function : error conditions
--FILE--
<?php
/* Prototype  : string get_resource_type  ( resource $handle  )
 * Description:  Returns the resource type
 * Source code: Zend/zend_builtin_functions.c
 */

echo "*** Testing get_resource_type() : error conditions ***\n";

echo "\n-- Testing get_resource_type() function with Zero arguments --\n";
var_dump( get_resource_type() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function get_resource_type(): 1 required, 0 provided in %s on line %d
 -- compile-error
