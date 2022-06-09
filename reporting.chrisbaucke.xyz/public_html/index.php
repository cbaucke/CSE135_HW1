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
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
</head>

<body>
  <h1>Reporting Dashboard</h1>
  <div id="browserChart"></div>
  <script src="chartCreation.js"></script>

  <a href="signout.php">Sign Out</a>
  <br>
  <?php 
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
      //echo "<p>" . $_SESSION["admin"] . "</p>";
      echo "<a href=\"users.php\">Manage Users</a>";
    }
  ?>
  <a href="users.php">Temp Manage Users</a>

</body>

</html>