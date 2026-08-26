<?php

include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$age = $_POST['age'];
$address = $_POST['address'];

$sql = "UPDATE students SET
        name='$name',
        email='$email',
        phone='$phone',
        gender='$gender',
        course='$course',
        age='$age',
        address='$address'
        WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

?>