--TEST--
getopt#009 (optind #4)
--ARGS--
messup -a 1 -b 2
--INI--
register_argc_argv=On
variables_order=GPS
--FILE--
<?php
    $optind = null;
    getopt('a:b:', array(), $optind);
    var_dump($optind);
?>
--EXPECT--
int(1)
