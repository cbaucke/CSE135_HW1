<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>General Request Echo</title>
    </head>
    <body>
        <h1 align="center">General Request Echo</h1>
        <?php 
            echo "HTTP Protocol: " . $_SERVER["SERVER_PROTOCOL"] . PHP_EOL;
            echo "HTTP Method: " . $_SERVER["REQUEST_METHOD"] . PHP_EOL;
            echo "Query String: " . htmlspecialchars($request) . PHP_EOL;
            echo "Message Body: " . file_get_contents("php://input") . PHP_EOL;
        ?>
    </body>
</html>