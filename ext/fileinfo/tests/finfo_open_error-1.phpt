--TEST--
Test finfo_open() function : error functionality
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc');
--FILE--
<?php
/* Prototype  : resource finfo_open([int options [, string arg]])
 * Description: Create a new fileinfo resource.
 * Source code: ext/fileinfo/fileinfo.c
 * Alias to functions:
 */

$magicFile = 'magic';

echo "*** Testing finfo_open() : error functionality ***\n";
var_dump( finfo_open( FILEINFO_MIME, $magicFile, 'extraArg' ) );


?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function finfo_open(): 2 at most, 3 provided in %sfinfo_open_error-1.php on line 11
 -- compile-error
