<html>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST["submit"]))
{
    echo "Hello " . $_POST["name"];
}
?>

</body>
</html>