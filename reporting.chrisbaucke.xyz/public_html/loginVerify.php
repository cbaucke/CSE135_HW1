<?php 
    session_start();
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
        header("Location: https://reporting.chrisbaucke.xyz");
        die();
    }
    else{
        //User entered incorrect login info, have them try again
        $_SESSION["incorrect"] = true;
        header("Location: https://reporting.chrisbaucke.xyz/login.php");
        die();
    }
?>