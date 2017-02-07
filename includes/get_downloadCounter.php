<?php require_once("dbconnection.php") ?>
<?php require_once("functions.php") ?>
<?php 

    $result = get_downloadCounter();
    echo $result;
?>