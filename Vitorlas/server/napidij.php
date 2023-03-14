<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    $sql = "SELECT nev, tipus, utas, ROUND(dij / utas) AS 'dij' FROM hajo ORDER BY nev";

    try {
        $stmt = $db -> query($sql);
        echo json_encode(["data" => $stmt -> fetchAll()]);
    } catch(Exception $e) {
        echo json_encode(["data" => "Hiba! ".$e]);
    }
?>