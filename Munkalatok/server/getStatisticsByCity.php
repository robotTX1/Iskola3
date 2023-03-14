<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDb.php";

    extract($_GET);

    $sql = "SELECT munkasok.nev AS 'munkas', COUNT(munkalatok.az) AS 'alkalom', SUM(munkalatok.munkaora) AS 'munkaora' FROM munkalatok INNER JOIN munkasok ON munkasok.az = munkalatok.maz WHERE munkalatok.telepules = '$city' GROUP BY munkasok.az";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());
?>