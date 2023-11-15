--TEST--
finally is run on object dtor, not free
--SKIPIF--
skip not support unset/close generator
--FILE--
<?php

function gen() {
    try {
        yield;
    } finally {
        var_dump($_GET);
    }
}

$gen = gen();
$gen->rewind();

set_error_handler(function() use($gen) {});

?>
--EXPECT--
array(0) {
}
