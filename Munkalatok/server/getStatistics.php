<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    require_once "configDb.php";

    $sql = "SELECT munkalatok.telepules, munkasok.nev AS 'munkas', SUM(munkalatok.anyagar) AS 'anyagar', SUM(munkalatok.munkaora) AS 'munkaora' FROM munkalatok INNER JOIN munkasok ON munkasok.az = munkalatok.maz GROUP BY munkasok.nev, munkalatok.telepules ORDER BY munkalatok.telepules, munkasok.nev";
    $stmt = $db -> query($sql);
    echo json_encode($stmt -> fetchAll());
?>