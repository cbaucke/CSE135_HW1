<?php 
    //Unset all session variables
    session_start();
    $_SESSION = array();
    header("Content-type: text/html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Logged Out</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <h1>Successfully Signed Out</h1>
  <a href="https://chrisbaucke.xyz">Home</a>
  <a href="login.php">Sign In</a>

</body>

</html>