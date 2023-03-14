<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    $sql = "SELECT kiadasiev, COUNT(id) AS 'db' FROM film GROUP BY kiadasiev";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());
?>