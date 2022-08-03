--TEST--
EUC-JP to ISO-2022-JP
--INI--
error_reporting=2039
--FILE--
<?php
/* include('test.inc'); */
/* charset=EUC-JP */

function hexdump($str) {
	$len = strlen($str);
	for ($i = 0; $i < $len; ++$i) {
		printf("%02x", ord($str{$i}));
	}
	print "\n";
}

$str = str_repeat("日本語テキストと English text", 30);
$str .= "日本語";

echo hexdump(iconv("EUC-JP", "ISO-2022-JP", $str));
?>
--EXPECT--
1b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c2546252d2539254824481b284220456e676c69736820746578741b2442467c4b5c386c1b2842
