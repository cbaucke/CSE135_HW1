<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Post Echo</title>
    </head>
    <body>
        <h1 align="center">POST Request Echo</h1>
        <?php 
            $msgBody = file_get_contents("php://input");
            echo "Message Body: " . $msgBody . "\r\n";
        ?>
    </body>
</html>