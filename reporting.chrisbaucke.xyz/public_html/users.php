<?php 
    session_start();
    //Make sure user is an admin
    if(!isset($_SESSION["admin"]) || $_SESSION["admin"] == false){
        header("Location: https://reporting.chrisbaucke.xyz");
    }
    header("Content-type: text/html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD Grid</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.zinggrid.com/zinggrid.min.js"></script>
</head>

<body>
    <zing-grid
        editor-controls
        caption="Users Grid"
        layout="row">
        <zg-data src="https://reporting.chrisbaucke.xyz/api/accounts"></zg-data>
    </zing-grid>

    <a href="https://chrisbaucke.xyz">Home (Team Page)</a>
    <a href="index.php">Dashboard</a>
</body>

</html>