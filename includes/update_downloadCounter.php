<?php require_once("dbconnection.php") ?>
<?php require_once("functions.php") ?>
<?php 

    $result = update_downloadCounter();
    echo $result;
?>