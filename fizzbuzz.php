<?php
function fizzbuzz($i){
	$answer = "";
	$answer .= (!($i % 3)) ? "Fizz" : "";
	$answer .= (!($i % 5)) ? "Buzz" : "";
	$answer .= (!$answer) ? $i : "";

	return $answer;
}

for ($i = 1; $i < 100; $i++){
	echo fizzbuzz($i);
	echo PHP_EOL;
}
