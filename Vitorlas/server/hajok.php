<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "db.php";

    extract($_GET);
    $sql = "SELECT nev, utas, dij FROM `hajo` WHERE tipus = '$tipus'";

    try {
        $stmt = $db -> query($sql);
        echo json_encode(["data" => $stmt -> fetchAll()]);
    } catch(Exception $e) {
        echo json_encode(["data" => "Hiba! ".$e]);
    }
?>

