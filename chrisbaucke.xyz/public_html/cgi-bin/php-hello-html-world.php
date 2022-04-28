<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello, PHP!</title>
    </head>
    <body>
        <?php echo "<h1 align:center>Chris was Here - Hello, PHP!</h1>" . PHP_EOL; ?>
        <?php echo "Current Time: " . date("l M d h:i:s A Y") . PHP_EOL; ?>
        <?php echo "Your IP Address: " . $_SERVER["REMOTE_ADDR"] . PHP_EOL; ?>
    </body>
</html>