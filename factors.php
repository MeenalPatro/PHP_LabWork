<?php
$num = 24;

echo "Factors of $num are:<br>";

for($i = 1; $i <= $num; $i++)
{
    if($num % $i == 0)
    {
        echo $i . " ";
    }
}
?>