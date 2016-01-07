--TEST--
Foreach void tests - error: not variable or void as target value
--FILE--
<?php

$a = [1, 2, 3];
foreach($a as $k => int) {
	echo $k;
}
echo "\n";
--EXPECTF--
Fatal error: foreach value target must be variable or void in %sforeach_void.002.php on line 4
