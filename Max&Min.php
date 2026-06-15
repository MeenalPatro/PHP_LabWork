<?php

//Write a PHP program to find out maximum and minimum number.

$num1 = 45;
$num2 = 12;
$num3 = 89;

echo "Numbers: $num1, $num2, $num3<br><br>";


if ($num1 >= $num2 && $num1 >= $num3) {
    $max = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $max = $num2;
} else {
    $max = $num3;
}

if ($num1 <= $num2 && $num1 <= $num3) {
    $min = $num1;
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $min = $num2;
} else {
    $min = $num3;
}

echo "<b>Maximum Number:</b> " . $max . "<br>";
echo "<b>Minimum Number:</b> " . $min . "<br>";
?>