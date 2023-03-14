<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDB.php";

    $author = $_GET["author"];

    $sql = "SELECT * FROM konyvek WHERE szerzo = '{$author}' ORDER BY cim";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());

?>