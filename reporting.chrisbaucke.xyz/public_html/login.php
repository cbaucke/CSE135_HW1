<?php 
    session_start();
    if(isset($_POST["username"]) && $_POST["username"] != "" && isset($_POST["password"]) && $_POST["password"] != ""){
        $username = $_POST["username"];
        //$hash = password_hash($_POST["password"], PASSWORD_DEFAULT, []);
        $hash = "password"
        $m = new MongoClient();
        $db = $m->users;
        $col = $db->users;
        $document = $col->findOne([
            $or => [
                ["username" => $username],
                ["email" => $username],
            ],
        ]);
        if($document["password"] == $hash){
            //User entered correct login info, redirect back to dashboard
            $_SESSION["username"] = $document["username"];
            $_SESSION["signedIn"] = true;
            $_SESSION["incorrect"] = false;
            header("Location: https://reporting.chrisbaucke.xyz");
            die();
        }
        else{
            //User entered incorrect login info, have them try again
            $_SESSION["incorrect"] = true;
            //header("Location: https://reporting.chrisbaucke.xyz/login.php");
            //die();
        }
    }
?>
<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HW4 Login</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <h1>Sign In</h1>
    <form method="post">
        <label>Username or Email: <input type="text" name="username" autocomplete="off"></label>
        <br>
        <label>Password: <input type="password" name="password" autocomplete="off"></label>
        <input type="submit" value="Sign in">
    </form>
    <?php 
        if($_SESSION["incorrect"] == true){
          echo "<p>Incorrect login information, please try again.</p>";
        }
    ?>
</body>

</html>