<?php 
  session_start();
  //If user is not signed in, redirect to login page
  if(!isset($_SESSION["signedIn"])){
    $_SESSION["signedIn"] = false;
    header("Location: https://reporting.chrisbaucke.xyz/login.php");
    die();
  }
  else if($_SESSION["signedIn"] != true){
    header("Location: https://reporting.chrisbaucke.xyz/login.php");
    die();
  }
?>

<?php header("Content-type: text/html"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HW4 Reporting Dashboard</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <h1>Reporting Dashboard</h1>
  <h2>Welcome, <?php echo $_SESSION["username"];?>!</h2>
  <a href="signout.php">Sign Out</a>
  <script>
    document.write(`Live @ ${new Date()}`);
  </script>

</body>

</html>