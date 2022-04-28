<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>State Demo 3</title>
    </head>
    <body>
        <h1 align="center">PHP Session Page 2</h1>
        <?php 
            $name = htmlspecialchars($_COOKIE["NameCookie"]);
            echo "Name: " . $name . "\r\n";
        ?>
        <a href="php-state-demo-2.php">Session Page 1</a>
        <a href="php-state-demo-1.php">CGI Form</a>
        <form action="php-state-demo-4.php" method="post">
            <input type="submit" value="Destroy Session">
        </form>
    </body>
</html>