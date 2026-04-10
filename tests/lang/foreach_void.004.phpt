--TEST--
Foreach void tests - error: test foreach($a as void) fails
--FILE--
<?php

$a = [1, 2, 3];
foreach($a as void) {
}
--EXPECTF--
Parse error: syntax error, unexpected token ")", expecting "->" or "?->" or "[" in /Users/dshadow/src/php-src/tests/lang/foreach_void.004.php on line 4
