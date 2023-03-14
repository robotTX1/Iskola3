<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    extract($_POST);

    $sql = "INSERT INTO kiado(`nev`) VALUES ('$name')";
    try {
        $stmt = $db -> exec($sql);
        $kiadoId = $db->lastInsertId();
        echo json_encode(["msg" => "Sikeres mentés, az új kiadó ID-je: ".$kiadoId]);
    } catch(PDOException $e) {
        echo json_encode(["msg" => "Nem sikerült a mentés: ".$e->getMessage()]);
    }
?>