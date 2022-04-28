<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>State Demo 4</title>
    </head>
    <body>
        <h1 align="center">PHP Session Destroyed</h1>
        <?php 
            setcookie("NameCookie", "", time() - 3600);
        ?>
        <a href="php-state-demo-2.php">Back to Session Page 1</a>
        <br>
        <a href="php-state-demo-3.php">Back to Session Page 2</a>
        <br>
        <a href="php-state-demo-1.php">Back to CGI Form</a>
        <br>
        <a href="../index.html">Home</a>
    </body>
</html>