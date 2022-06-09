<?php 
    require_once("./vendor/autoload.php");
    echo $_POST;
    if(isset($_POST["password"]) && $_POST["password"] != ""){
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT, []);
        $_POST["password"] = $hash;
        $m = new MongoDB\Client("mongodb://localhost");
        $db = $m->users;
        $col = $db->users;
        $document = $col->insertOne($_POST);
    }
?>