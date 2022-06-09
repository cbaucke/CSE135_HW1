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
  <title>HW4 Detailed Report</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="main.css">
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script src="https://cdn.zinggrid.com/zinggrid.min.js"></script>
</head>

<body>
  <div class="pageTop">
    <div>
      <h1>Detailed Report</h1>
    </div>
    <div>
      <a href="signout.php">Sign Out</a>
    </div>
  </div>


</body>

</html>