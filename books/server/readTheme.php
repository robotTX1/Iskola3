<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDB.php";

    $sql = "SELECT tema FROM konyvek GROUP BY tema";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());

?>