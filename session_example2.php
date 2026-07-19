<?php

//sessions are always unique according to server
//sessiona are always cookies 

session_start(); //compulsory

?>

<html>
    <head>
        <title>Session Example</title>
    </head>
    <body>
        <?php
        echo "User is : ".$_SESSION['username'];
        ?>  
    </body>
</html>