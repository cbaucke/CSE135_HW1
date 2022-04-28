<?php header("Content-type: application/json"); ?>
<?php
    $packet = array("title"=>"Hello, PHP!", "heading"=>"Chris was Here - Hello, PHP!", "time"=>date("l M d h:i:s A Y"), "IP"=>$_SERVER["REMOTE_ADDR"]);
    echo json_encode($packet);
?>