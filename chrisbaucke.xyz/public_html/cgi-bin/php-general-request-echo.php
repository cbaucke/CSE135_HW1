<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>General Request Echo</title>
    </head>
    <body>
        <h1 align="center">General Request Echo</h1>
        <?php 
            echo "HTTP Protocol: " . $_SERVER["SERVER_PROTOCOL"] . "<br>";
            echo "HTTP Method: " . $_SERVER["REQUEST_METHOD"] . "<br>";
            $request = $_GET;
            echo "Query String: " . htmlspecialchars($request) . "<br>";
            echo "Message Body: " . file_get_contents("php://input") . "<br>";
        ?>
    </body>
</html>