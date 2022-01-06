--TEST--
json_last_error_msg() failures
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php

var_dump(json_last_error_msg('some', 4, 'args', 'here'));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function json_last_error_msg(): 0 at most, 4 provided in %s on line %d
 -- compile-error
