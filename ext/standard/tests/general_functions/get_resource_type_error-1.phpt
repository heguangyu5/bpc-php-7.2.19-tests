--TEST--
Test get_resource_type() function : error conditions
--FILE--
<?php
/* Prototype  : string get_resource_type  ( resource $handle  )
 * Description:  Returns the resource type
 * Source code: Zend/zend_builtin_functions.c
 */

echo "*** Testing get_resource_type() : error conditions ***\n";

echo "\n-- Testing get_resource_type() function with more than expected no. of arguments --\n";
$res = fopen(__FILE__, "r");
$extra_arg = 10;
var_dump( get_resource_type($res, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function get_resource_type(): 1 at most, 2 provided in %s on line %d
 -- compile-error
