<?php

include "db.php";

$message = "";

if (isset($_POST['submit'])) {

    $roll_no = trim($_POST['roll_no']);
    $name = trim($_POST['name']);

    $php_marks = $_POST['php_marks'];
    $mysql_marks = $_POST['mysql_marks'];
    $html_marks = $_POST['html_marks'];

    if ($roll_no == "" || $name == "") {

        $message = "Please fill all required fields.";

    } elseif (
        $php_marks < 0 || $php_marks > 100 ||
        $mysql_marks < 0 || $mysql_marks > 100 ||
        $html_marks < 0 || $html_marks > 100
    ) {

        $message = "Marks must be between 0 and 100.";

    } else {

        $total = $php_marks + $mysql_marks + $html_marks;

        $average = $total / 3;

        if ($average >= 40) {
            $result = "PASS";
        } else {
            $result = "FAIL";
        }

        $sql = "INSERT INTO students
                (roll_no, name, php_marks, mysql_marks, html_marks, total, average, result)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param(
            $stmt,
            "ssiiiids",
            $roll_no,
            $name,
            $php_marks,
            $mysql_marks,
            $html_marks,
            $total,
            $average,
            $result
        );

        if (mysqli_stmt_execute($stmt)) {

            $message = "Student record added successfully.";

        } else {

            $message = "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Add Student</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Add Student Result</h1>

    <?php

    if ($message != "") {
        echo "<p class='message'>$message</p>";
    }

    ?>

    <form method="POST">

        <label>Roll No:</label>

        <input
            type="text"
            name="roll_no"
            required
        >

        <label>Student Name:</label>

        <input
            type="text"
            name="name"
            required
        >

        <label>PHP Marks:</label>

        <input
            type="number"
            name="php_marks"
            min="0"
            max="100"
            required
        >

        <label>MySQL Marks:</label>

        <input
            type="number"
            name="mysql_marks"
            min="0"
            max="100"
            required
        >

        <label>HTML Marks:</label>

        <input
            type="number"
            name="html_marks"
            min="0"
            max="100"
            required
        >

        <button type="submit" name="submit">
            Add Student
        </button>

    </form>

    <br>

    <a href="students.php">
        View Student Records
    </a>

</div>

</body>

</html>