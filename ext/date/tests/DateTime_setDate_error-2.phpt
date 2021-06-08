--TEST--
Test DateTime::setDate() function : error conditions
--FILE--
<?php
/* Prototype  : public DateTime DateTime::setDate  ( int $year  , int $month  , int $day  )
 * Description: Resets the current date of the DateTime object to a different date.
 * Source code: ext/date/php_date.c
 * Alias to functions: date_date_set()
 */

date_default_timezone_set("Europe/London");

echo "*** Testing DateTime::setDate() : error conditions ***\n";

$datetime = new DateTime("2009-01-30 19:34:10");

echo "\n-- Testing DateTime::setDate() function with less than expected no. of arguments --\n";
$year = 2009;
$month = 1;
var_dump( $datetime->setDate($year, $month) );
?>
===DONE===
--EXPECTF--
*** Testing DateTime::setDate() : error conditions ***

-- Testing DateTime::setDate() function with less than expected no. of arguments --

Fatal error: Uncaught ArgumentCountError: Too few arguments to method DateTime::setDate(): 3 required, 2 provided in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
