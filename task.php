<?php
echo "============Q1==============";
echo "<br>";

function factorial($n)
{
	if ($n <= 0) {
		return 1;
	} else {
		return $n * factorial(($n - 1));
	}
}
echo factorial(5);
echo "<br>";

echo "============Q2==============";
echo "<br>";

function prime($n)
{

	if ($n > 1 && $n % $n !== 0) {
		echo "$n is a prime number";
	} else {
		echo "$n is not a prime number";
	}
}
prime(4);

echo "<br>";

echo "============Q3==============";
echo "<br>";
function reverse($str)
{
	$length = strlen($str);
	for ($i = $length - 1; $i >= 0; $i--) {
		echo $str[$i];
	}
}
echo reverse("mohammed");
echo "<br>";

echo "============Q4==============";
echo "<br>";
$arr = ["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ali" => "10"];
ksort($arr);
print_r($arr);

echo "<br>";

echo "============Q5==============";
echo "<br>";
function checkLower($str)
{
	if ($str == strtolower($str)) {
		echo "that's right";
	} else {
		echo "wrong";
	}
}
checkLower("hello");
echo "<br>";

echo "============Q6==============";
echo "<br>";

function palindrome($str)
{
	if ($str == strrev($str)) {
		echo "match";
	} else {
		echo " doesn't match";
	}
}
palindrome("done");
echo "<br>";

echo "============Q7==============";
echo "<br>";


function sum($input, $three)
{
	$count = count($input) - 2;
	$res = [];
	for ($i = 0; $i < $count; $i++) {
		if ($input[$i] + $input[$i + 1] + $input[$i + 2] == $three) {
			array_push($res, "{$input[$i]} + {$input[$i + 1]} + {$input[$i + 2]} = $three");
		}
	}
	return $res;
}
$input = array(2, 7, 7, 1, 8,  2, 7, 8, 7);
echo "<pre>";
print_r(sum($input, 16));

