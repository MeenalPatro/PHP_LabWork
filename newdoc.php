<?php
$str = <<<'DEMO'
Welcome to Marwadi University.
Learn with newdoc example.
DEMO;
echo $str;
echo '</br>';

echo <<< 'Demo'
// Here we are not storing string content in variable str.
Welcome to Marwadi University.
Learn with newdoc example.
Demo;
?>
