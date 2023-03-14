<?php 
    session_start();
    
    require_once "configDB.php";
    extract($_POST);
    
    $pw = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO USERS(username, email, password) VALUES('$username', '$email', '$pw')";

    try {
        $stm = $db -> exec($sql);
        echo json_encode(["msg" => "Sikeres regisztráció! azonosító: '{$db->lastInsertId()}'"]);
    } catch(exception $e) {
        echo json_encode(["msg" => "Sikertelen regisztráció! - $e"]);
    }
?>