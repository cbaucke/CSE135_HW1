<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Get Echo</title>
    </head>
    <body>
        <h1 align="center">GET Request Echo</h1>
        <?php 
            $request = $_GET;
            echo "Query String: " . htmlspecialchars($request) . PHP_EOL;
            foreach($request as $key => $value){
                echo $key . " = " . $value . PHP_EOL;
            }
            unset($key);
            unset($value);
        ?>
    </body>
</html>