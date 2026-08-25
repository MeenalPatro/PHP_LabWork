<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$age = $_POST['age'];
$address = $_POST['address'];

$sql = "INSERT INTO students
        (name, email, phone, gender, course, age, address)
        VALUES
        ('$name', '$email', '$phone', '$gender', '$course', '$age', '$address')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

?>