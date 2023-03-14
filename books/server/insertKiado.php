<?php
    header("Access-Control-Allow-Origin: *");
    require_once "configDB.php";

    extract($_POST);

    $sql = "INSERT INTO kiado VALUES (null, '{$kiado}', '{$hely}')";
    $stmt = $db -> exec($sql);
    if($stmt) {
        echo "Sikeres mentés";
    } else {
        echo "Nem sikerült valami :(";
    }
?>