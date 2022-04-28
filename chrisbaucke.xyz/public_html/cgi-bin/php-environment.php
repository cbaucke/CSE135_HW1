<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Environment Variables</title>
    </head>
    <body>
        <h1 align="center">Environment Variables</h1>
        <?php 
            $httpHdrs = get_headers();
            foreach($httpHdrs as $key => $value){
                echo $key . "=" . $value . "\r\n";
            }
            unset($key);
            unset($value);

            $envVars = getenv();
            foreach($envVars as $key => $value){
                echo $key . "=" . $value . "\r\n";
            }
            unset($key);
            unset($value);
        ?>
    </body>
</html>