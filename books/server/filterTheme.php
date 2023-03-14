<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDB.php";

    $theme = $_GET["theme"];

    $sql = "SELECT * FROM konyvek WHERE tema = '{$theme}' ORDER BY cim";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());

?>