<?php

//Write a PHP program to print 5 to 10 using For and ForEach.

echo "<h3>Printing 5 to 10 using 'For' Loop:</h3>";
for ($i = 5; $i <= 10; $i++) 
{
    echo $i . " ";
}

echo "<br><br>";

echo "<h3>Printing 5 to 10 using 'ForEach' Loop:</h3>";

$numbers = [5, 6, 7, 8, 9, 10];

foreach ($numbers as $num) 
{
    echo $num . " ";
}
?>