--TEST--
Foreach void tests - void as the value
--FILE--
<?php

$a = [1, 2, 3];
foreach($a as $k => void) {
	echo $k;
}
echo "\n";

$a = ['a' => 'A', 'b' => 'B', 'c' => 'C'];
foreach($a as $k => void) {
	echo $k;
}
echo "\n";
--EXPECT--
012
abc
