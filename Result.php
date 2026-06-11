
<?php

//Write a PHP program for print Previous semester Result using variables & constants in PHP.
define("std_name", "Meenal Patro");
define("er_no", "92400527259");
define("sem", "5th Semester");

$data_structures = 90;
$database_management = 98;
$web_development = 92;

$total_marks = $data_structures + $database_management + $web_development;
$max_marks = 300;
$percentage = ($total_marks / $max_marks) * 100;

echo "<h2>--- Previous Semester Result ---</h2>";
echo "Student Name: " . std_name . "<br>";
echo "Enrollment No: " . er_no . "<br>";
echo "Semester: " . sem . "<br>";
echo "-------------------------------------<br>";
echo "Data Structures: " . $data_structures . "/100<br>";
echo "DBMS: " . $database_management . "/100<br>";
echo "Web Development: " . $web_development . "/100<br>";
echo "-------------------------------------<br>";
echo "Total Marks: " . $total_marks . " / " . $max_marks . "<br>";
echo "Percentage: " . number_format($percentage, 2) . "%<br>";
?>