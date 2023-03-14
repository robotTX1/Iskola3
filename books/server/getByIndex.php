<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDB.php";

    extract($_GET);

    $sql = "SELECT * FROM kiado WHERE kod = {$kod}";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetch());

?>