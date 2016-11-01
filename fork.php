<?php

$a = 0;
for ($i = 0; $i < 25; ++$i) {
	echo $i . " " . $argv[1] . "\t";
	for ($j = 0; $j < 10000000; ++$j) {
		$a = $j;
	}
	sleep(5);
}

echo PHP_EOL;