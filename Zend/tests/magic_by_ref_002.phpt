--TEST--
passing second parameter of __set() by ref
--FILE--
<?php

class test {
    function __set($name, &$val) { }
}

$t = new test;
$t->prop = 1;

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Method test::__set() cannot take arguments by reference in %s on line %d
 -- compile-error
