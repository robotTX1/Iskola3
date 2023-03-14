<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    $sql = "SELECT hajo.nev, SUM(tura.nap) AS 'nap', SUM(tura.nap) * hajo.dij AS 'bevetel' FROM tura INNER JOIN hajo ON hajo.id = tura.hajo_id GROUP BY hajo.id ORDER BY bevetel DESC";

    try {
        $stmt = $db -> query($sql);
        echo json_encode(["data" => $stmt -> fetchAll()]);
    } catch(Exception $e) {
        echo json_encode(["data" => "Hiba! ".$e]);
    }
?>