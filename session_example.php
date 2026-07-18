<?php
 session_start(); //compulsory


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $_SESSION['username']="Meenal";
    echo "Session information is stored successfully";
    ?>

</body>
</html>






