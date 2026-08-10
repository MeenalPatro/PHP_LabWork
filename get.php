<html>
<body>

<form method="get">
    Enter Name:
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_GET["name"]))
{
    echo "Welcome " . $_GET["name"];
}
?>

</body>
</html>