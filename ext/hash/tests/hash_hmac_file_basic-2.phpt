--TEST--
Test hash_hmac_file() function : basic functionality
--FILE--
<?php

hash_hmac_file('foo', 'file');

?>
===Done===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_hmac_file(): 3 required, 2 provided in %s on line %d
 -- compile-error
