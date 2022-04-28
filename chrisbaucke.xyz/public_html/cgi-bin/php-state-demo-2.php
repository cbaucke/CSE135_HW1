<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>State Demo 2</title>
    </head>
    <body>
        <h1 align="center">PHP Session Page 1</h1>
        <?php 
            if(htmlspecialchars($_COOKIE["NameCookie"]) != ""){
                $name = htmlspecialchars($_COOKIE["NameCookie"]);
            }
            else{
                $name = $_POST["username"];
                setcookie("NameCookie", $name);
            }
            echo "Name: " . $name . "<br>";
        ?>
        <a href="php-state-demo-3.php">Session Page 2</a>
        <a href="php-state-demo-1.php">CGI Form</a>
        <form action="php-state-demo-4.php" method="post">
            <input type="submit" value="Destroy Session">
        </form>
    </body>
</html>