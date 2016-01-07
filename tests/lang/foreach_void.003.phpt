--TEST--
Foreach void tests - error: test that exceptions don't crash
--FILE--
<?php

$a = [1, 2, 3];
foreach($a as $k => void) {
	throw new \Exception($k);
}

echo 'Should not get here.';

--EXPECTF--
Fatal error: Uncaught Exception: 0 in %sforeach_void.003.php:5
Stack trace:
#0 {main}
  thrown in %sforeach_void.003.php on line 5
