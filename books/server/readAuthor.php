<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDB.php";

    $sql = "SELECT szerzo FROM konyvek GROUP BY szerzo";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());

?>