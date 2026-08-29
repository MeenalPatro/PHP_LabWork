<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <h1>Add Student</h1>

    <form action="insert.php" method="POST">

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="text" name="phone" required>

        <label>Gender</label>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label>Course</label>
        <input type="text" name="course" required>

        <label>Age</label>
        <input type="number" name="age" required>

        <label>Address</label>
        <textarea name="address" required></textarea>

        <button type="submit" class="btn add-btn">
            Add Student
        </button>

        <a href="index.php" class="btn back-btn">
            Back
        </a>

    </form>

</div>

</body>
</html>