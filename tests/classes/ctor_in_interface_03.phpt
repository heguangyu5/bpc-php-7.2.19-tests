--TEST--
ZE2 A class constructor must keep the signature of base class interfaces
--SKIPIF--
skip TODO interface method signature check
--FILE--
<?php
interface constr
{
	function __construct();
}

abstract class implem implements constr
{
}

class derived extends implem
{
	function __construct($a)
	{
	}
}

?>
--EXPECTF--
Fatal error: Declaration of derived::__construct($a) must be compatible with constr::__construct() in %s on line %d
