<?php 
  session_start();
  header("Content-type: text/html");
?>

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
  <form action="loginVerify.php" method="post">
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