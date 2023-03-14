<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    extract($_GET);

    $sql = "SELECT * FROM film WHERE kiadoid = $id";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());
?>