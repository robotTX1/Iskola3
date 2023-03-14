<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    $sql = "SELECT * FROM kiado ORDER BY nev";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());
?>