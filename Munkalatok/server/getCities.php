<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDb.php";

    $sql = "SELECT DISTINCT telepules FROM munkalatok ORDER BY telepules";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());
?>