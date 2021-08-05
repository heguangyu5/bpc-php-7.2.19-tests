--TEST--
simple variable replacement test (nowdoc)
--ARGS--
--bpc-include-file Zend/tests/nowdoc.inc
--FILE--
<?php

require_once 'nowdoc.inc';

print <<<'ENDOFNOWDOC'
This is nowdoc test #$a.

ENDOFNOWDOC;

$x = <<<'ENDOFNOWDOC'
This is nowdoc test #$b.

ENDOFNOWDOC;

print "{$x}";

?>
--EXPECT--
This is nowdoc test #$a.
This is nowdoc test #$b.
