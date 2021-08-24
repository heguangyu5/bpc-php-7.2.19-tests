--TEST--
Float type should not allow invalid types as default
--FILE--
<?php

function test(float $arg = true)
{
    var_dump($arg);
}

test();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Default value for parameters with a float type can only be float, integer, or NULL in %s on line %d
 -- compile-error
