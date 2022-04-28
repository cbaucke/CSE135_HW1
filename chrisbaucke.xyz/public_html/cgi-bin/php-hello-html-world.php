<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello, PHP!</title>
    </head>
    <body>
        <?php echo "<H1 text-align:center>Chris was Here - Hello, PHP!</H1>"; ?>
        <?php echo "Current Time: " . date("l M d h:i:s A Y"); ?>
        <?php echo "Your IP Address: " . $_SERVER["REMOTE_ADDR"]; ?>
    </body>
</html>