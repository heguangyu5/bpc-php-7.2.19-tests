--TEST--
Bug #72215.1 (Wrong return value if var modified in finally)
--SKIPIF--
skip not supported return reference from function/method
--FILE--
<?php
function &test(&$b) {
    $a =& $b;
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
$x = 1;
$y =& test($x);
var_dump($y);
$x = 3;
var_dump($y);
?>
--EXPECT--
int(2)
int(3)
