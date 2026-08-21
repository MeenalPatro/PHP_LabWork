<?php

include "db.php";

$sql = "SELECT * FROM students ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Records</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>Student Examination Results</h1>

    <a href="add_student.php" class="btn">
        Add New Student
    </a>

    <br><br>

    <table>

        <tr>

            <th>Roll No</th>

            <th>Name</th>

            <th>PHP</th>

            <th>MySQL</th>

            <th>HTML</th>

            <th>Total</th>

            <th>Average</th>

            <th>Result</th>

        </tr>

        <?php

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td>
                <?php echo $row['roll_no']; ?>
            </td>

            <td>
                <?php echo $row['name']; ?>
            </td>

            <td>
                <?php echo $row['php_marks']; ?>
            </td>

            <td>
                <?php echo $row['mysql_marks']; ?>
            </td>

            <td>
                <?php echo $row['html_marks']; ?>
            </td>

            <td>
                <?php echo $row['total']; ?>
            </td>

            <td>
                <?php echo number_format($row['average'], 2); ?>
            </td>

            <td>
                <?php echo $row['result']; ?>
            </td>

        </tr>

        <?php

            }

        } else {

        ?>

        <tr>

            <td colspan="8">
                No student records found.
            </td>

        </tr>

        <?php

        }

        ?>

    </table>

</div>

</body>

</html>