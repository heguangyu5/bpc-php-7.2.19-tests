--TEST--
Test that PDO::getAvailableDrivers / pdo_drivers does not accept any parameters
--CREDITS--
Amo Chohan <amo.chohan@gmail.com>
--FILE--
<?php
PDO::getAvailableDrivers('fail');
--EXPECTF--
Warning: Too many arguments to method PDO::getAvailableDrivers(): 0 at most, 1 provided in %s on line %d
