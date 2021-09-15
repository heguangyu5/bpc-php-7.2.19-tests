--TEST--
testing @ and error_reporting - 10
--FILE--
<?php

error_reporting(E_ALL);

function make_exception()
{
    $a = array();
	@$a[0];
	base64_encode($a);
	error_reporting(0);
	throw new Exception();
}

try {
	@make_exception();
} catch (Exception $e) {}

var_dump(error_reporting());

error_reporting(E_ALL&~E_NOTICE);

try {
	@make_exception();
} catch (Exception $e) {}

var_dump(error_reporting());

echo "Done\n";
?>
--EXPECTF--
int(32767)
int(32759)
Done
