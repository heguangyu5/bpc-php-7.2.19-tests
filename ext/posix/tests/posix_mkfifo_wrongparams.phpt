--TEST--
Test parameter validation in posix_mkfifo().
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009
--SKIPIF--
<?php
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded.');
}
?>
--FILE--
<?php
var_dump(posix_mkfifo(null, 0644));
?>
===DONE===
--EXPECTF--
bool(false)
===DONE===
