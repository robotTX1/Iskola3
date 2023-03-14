<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    $sql = "SELECT DISTINCT tipus FROM `hajo`";

    try {
        $stmt = $db -> query($sql);
        echo json_encode(["data" => $stmt -> fetchAll()]);
    } catch(Exception $e) {
        echo json_encode(["data" => "Hiba! ".$e]);
    }
?>