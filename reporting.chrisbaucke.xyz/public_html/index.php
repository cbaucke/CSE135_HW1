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
  <script src="https://cdn.zinggrid.com/zinggrid.min.js"></script>
</head>

<body>
  <div class="pageTop">
    <div>
      <h1>Reporting Dashboard</h1>
    </div>
    <div>
      <a href="signout.php">Sign Out</a>
      <br>
      <?php 
        if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
          echo "<a href=\"users.php\">Manage Users</a>";
        }
      ?>
    </div>
  </div>

  <div class="charts">
    <div id="browserChart"></div>
    <div id="viewsChart"></div>
  </div>
  <script src="chartCreation.js"></script>

  <div class="grid">
    <zing-grid pager
      page-size=10 
      zebra>
      <zg-data src="https://chrisbaucke.xyz/api/activity"></zg-data>
    </zing-grid>

    <zg-column index="activity" align="center"></zg-column>
    <zg-column index="idleTime" align="center"></zg-column>
    <zg-column index="cursorXPos" align="center"></zg-column>
    <zg-column index="cursorYPos" align="center"></zg-column>
  </div>

</body>

</html>