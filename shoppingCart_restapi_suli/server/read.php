<?php
session_start();
require_once 'configDB.php';
$sql="SELECT * FROM products order by name";
try{
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetchAll());
}catch(Exception $e){
    echo json_encode(["msg"=>"Sikertelen adatbázis kapcsolódás!- {$e}"]);
}

?>