<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>State Demo 1</title>
    </head>
    <body>
        <h1 align="center">PHP Session Form</h1>
        <form action="php-state-demo-2.php" method="post">
            <label>What is your name? <input type="text" name="username" autocomplete="off"></label>
            <br>
            <input type="submit" value="Start Session">
        </form>
        <br>
        <a href="../index.html">Home</a>
    </body>
</html>