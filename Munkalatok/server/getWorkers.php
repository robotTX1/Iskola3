<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDb.php";

    $sql = "SELECT az, nev, YEAR(NOW()) - kezdev AS 'ev' FROM munkasok ORDER BY ev DESC";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());
?>